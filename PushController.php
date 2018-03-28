<?php
namespace GymApp\Controller;
use GymApp\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Http\Client;
use Cake\ORM\TableRegistry;
use Cake\Database\Connection;
use Cake\Datasource\ConnectionManager;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
/*
 * Users Controller
 *
 * @property \Login\Model\Table\UsersTable $Users
 */
class PushController extends AppController
{
  
      public function push() {
		$this->layout = 'pushlayout';
		$this->loadModel('master_mepush_events');
		$this->loadModel('master_mepush_custom');
		$session = $this->request->session();
	    $devUuid = $session->read('Auth.User.dev_uuid');
	    $dev_id = $session->read('Auth.User.id');
	    $app_uniqueid = $session->read('app_unique_id');
		$connectionServices = ConnectionManager::get('Service_db');
		$query = "select * from master_mepush_events where app_id = '$app_uniqueid'";
		$pusheventData = $connectionServices->query($query)->fetchAll('assoc');
		$query = "select * from master_mepush_custom where app_id = '$app_uniqueid'";
		$pushcustomData = $connectionServices->query($query)->fetchAll('assoc');
		$pushData=array_merge($pushcustomData,$pusheventData);
		$this->set('pushData',$pushData);
		//pr($pushData);die;
      }

        public function addpush() {
		$this->layout = 'pushlayout';
		$this->loadModel('master_mepush_events');
		$this->loadModel('master_mepush_custom');
		$this->autoRender=false;
		if(isset($this->request->data)){
		$data= $this->request->data;
		
		$session = $this->request->session();
	    $devUuid = $session->read('Auth.User.dev_uuid');
	    $dev_id = $session->read('Auth.User.id');
	    $app_uniqueid = $session->read('app_unique_id');
        $db_name = $session->read('Auth.User.db_name');  
		$datatosave=$pusharr=array();
		$pusharr['notificationbartype']='standard';
        $pusharr['rich_image']='';  
        $pusharr['inapp']='';
        $pusharr['barId']=''; 
        $pusharr['promptId']=''; 
        $pusharr['color']='';
		$pusharr['notificationbar']='notification';
        $pusharr['imgpath']='img/developerimg/'.$db_name.'/mego_push/';
		$pusharr['unifiedimgpath']='img/developerimg/'.$db_name.'/';  
		$pusharr['header']=isset($data['push_title'])? $data['push_title']:'';
		$pusharr['deeplink']=isset($data['deeplink_android'])? $data['deeplink_android']:'';
		$pusharr['deeplink_ios']=isset($data['deeplink_ios'])? $data['deeplink_ios']:'';
		$pusharr['displaytext']=isset($data['push_text'])? trim($data['push_text']):'';
        $pusharr['preferences']='global';  
	   $jsondetail=json_encode($pusharr);
       $datatosave['details']=isset($jsondetail)? $jsondetail:'';
       $datatosave['app_id']=isset($app_uniqueid)? $app_uniqueid:'';
       $datatosave['dev_id']=isset($dev_id)? $dev_id:'';
       $datatosave['android_version']=isset($data['and_app_version'])? $data['and_app_version']:'';
       $datatosave['ios_version']=isset($data['ios_app_version'])? $data['ios_app_version']:'';
       $datatosave['id']=isset($data['hidden_id'])? $data['hidden_id']:'';
       $connectionServices = ConnectionManager::get('Service_db');
       if(isset($data['event_type']) &&  $data['event_type']==1  || $data['event_type']==2){ 
		   
		   	if(isset($data['hidden_id']) &&  $data['hidden_id']!=''){
			$id=$data['hidden_id'];
		    $updateQuery="update master_mepush_events  set  event_type = '".$data['event_type']."',app_id='".$app_uniqueid."',andriod_version = '".$datatosave['android_version']."',ios_version = '".$datatosave['ios_version']."', details='".$jsondetail."',modified='".date('Y-m-d h:i:s')."' where id=".$id."";
            $connectionServices->query($updateQuery);
					}
		   else{
            $insertQuery="INSERT INTO `master_mepush_events` (`id`, `devmode_id`, `app_id`,`event_type`,   `details`,`modified`,`andriod_version`, `ios_version`, `status`) 
            VALUES (NULL, '".$dev_id."', '".$app_uniqueid."','".$data['event_type']."','".$jsondetail."','".date('Y-m-d h:i:s')."', '".$datatosave['android_version']."', '".$datatosave['ios_version']."','1');";
	         $connectionServices->query($insertQuery);
              $selectQuery = "select details,id from master_mepush_events where devmode_id = {$dev_id} ORDER BY  master_mepush_events.id DESC";
              $resData = $connectionServices->query($selectQuery)->fetchAll("assoc");
             // pr($selectQuery);   pr($resData);
	          $http = new Client();
              $response = $http->post(SERVICE_URL.'/me_push/Eventservices/mepusheventcron_1/' . $devUuid, [
                   'id' => $resData[0]['id']
               ]);
       //    pr($response);die; 
             //pr(SERVICE_URL.'/me_push/Eventservices/mepusheventcron/' . $devUuid.'/1'); pr($response);die; 
	       }
	      }
	        if(isset($data['event_type']) &&  $data['event_type']==3 || $data['event_type']==0){
				if(isset($data['hidden_id']) &&  $data['hidden_id']!=''){ 
			$id=$data['hidden_id'];
                  
		    $updateQuery="update master_mepush_custom  set  event_type = '".$data['event_type']."',app_id='".$app_uniqueid."', details='".$jsondetail."',modified='".date('Y-m-d h:i:s')."',status='1',delivery_type='immediately'
		     where id=".$id."";
               $connectionServices->query($updateQuery);
              $http = new Client();
              $response = $http->post(SERVICE_URL . '/me_push/Custom/cronmepushcustom/' . $devUuid, [
                    'id' => $id
                ]);
					
					}
				else{ 
              $insertQuery="INSERT INTO `master_mepush_custom` (`id`, `dev_id`,  `app_id`,`event_type`, `details`, `modified`,`status`,`delivery_type`) 
              VALUES (NULL, '".$dev_id."', '".$app_uniqueid."','".$data['event_type']."','".$jsondetail."', '".date('Y-m-d h:i:s')."','1','immediately')";
	          $connectionServices->query($insertQuery);
	          //$devid = $session->read('Auth.User.dev_uuid');
	          $selectQuery = "select details,id from master_mepush_custom where dev_id = {$dev_id} ORDER BY  master_mepush_custom.id DESC";
              $resData = $connectionServices->query($selectQuery)->fetchAll("assoc");
               //pr($selectQuery);   pr($resData);die;
	          $http = new Client();
              $response = $http->post(SERVICE_URL . '/me_push/Custom/cronmepushcustom/' . $devUuid, [
                    'id' => $resData[0]['id']
                ]);
             //  pr($response);die;    
            
	       } 
        }

   }
return $this->redirect(['controller' => 'Push','action' => 'push']);

}

    /////////////edit///////////////////////
    
    public function editpush($id)
       {
		$this->layout = 'pushlayout';
		$this->loadModel('master_mepush_events');
		$this->loadModel('master_mepush_custom');
        $val=explode('_',$id);
        $dbname=trim($this->Auth->User('db_name'));
		$session = $this->request->session();
	    $devUuid = $session->read('Auth.User.dev_uuid');
	    $dev_id = $session->read('Auth.User.id');
	    $app_uniqueid = $session->read('app_unique_id');
		$connectionServices = ConnectionManager::get('Service_db');
		if(isset($val[1]) && $val[1]==1 || $val[1]==2) {
			if(isset($val[0]) && $val[0]!='') {
				$tabid=$val[0];
		$query = "select * from master_mepush_events where app_id = '$app_uniqueid' AND id=".$tabid;
		$pushedtData = $connectionServices->query($query)->fetch('assoc');
	    }
	  }
	  if(isset($val[1]) && $val[1]==0 || $val[1]==3) {
		if(isset($val[0]) && $val[0]!='') {
		$tabid=$val[0];
		$query = "select * from master_mepush_custom where app_id = '$app_uniqueid' AND id=".$tabid;
		$pushedtData = $connectionServices->query($query)->fetch('assoc');

	    }
	  }

		$this->set('pushedtData',$pushedtData);
		$query = "select * from master_mepush_events where app_id = '$app_uniqueid'";
		$pusheventData = $connectionServices->query($query)->fetchAll('assoc');
		$query = "select * from master_mepush_custom where app_id = '$app_uniqueid'";
		$pushcustomData = $connectionServices->query($query)->fetchAll('assoc');
		$pushData=array_merge($pushcustomData,$pusheventData);
		$this->set('pushData',$pushData);
		
    }
         
   



 ////////////////////////////////delete push /////////////
 
  public function deletepush(){
	        $this->layout = false;
	        $connectionServices = ConnectionManager::get('Service_db');
	        $this->loadModel('master_mepush_events');
		    $this->loadModel('master_mepush_custom');
	        $this->autoRender=false;
            $tableid=$this->request->data['id'];
            $event_type=$this->request->data['event_type'];
            if(isset($tableid) && $event_type !=''){ 
				if(isset($event_type) && $event_type  == 0 || $event_type == 3 ){
           $DeleteQuery="DELETE FROM `master_mepush_custom` WHERE `master_mepush_custom`.`id` =$tableid";
	        $connectionServices->query($DeleteQuery);
	       }
		     if(isset($event_type) && $event_type==1 || $event_type==2 ){
            $DeleteQuery="DELETE FROM `master_mepush_events` WHERE `master_mepush_events`.`id` =$tableid";
	       $connectionServices->query($DeleteQuery);
                   }
               }
}

 ////////////////////////////////delete push /////////////
 
  public function draftstatus(){
	        $this->layout = false;
	        $connectionServices = ConnectionManager::get('Service_db');
	        $this->loadModel('master_mepush_events');
		    $this->loadModel('master_mepush_custom');
	        $this->autoRender=false;
            $tableid=$this->request->data['id'];
            $event_type=$this->request->data['event_type'];
         
            if(isset($tableid) && $event_type !=''){ 
		     if(isset($event_type) && $event_type  == 0 || $event_type == 3 ){
				 $updateQuery="UPDATE `master_mepush_custom` SET `status` = '1' WHERE `master_mepush_custom`.`id` =".$tableid;
	        $connectionServices->query($updateQuery);
	        echo "complete";
	       }
		     if(isset($event_type) && $event_type==1 || $event_type==2 ){
            $updateQuery="UPDATE `master_mepush_events` SET `status` = '1' WHERE `master_mepush_events`.`id` =".$tableid;
	       $connectionServices->query($updateQuery);
	        echo "complete";
                   }
               }
}
public function getBydate(){
	        $this->layout = false;
	        $connectionServices = ConnectionManager::get('Service_db');
	        $this->loadModel('master_mepush_events');
		    $this->loadModel('master_mepush_custom');
	        $this->autoRender=false;
	        $session = $this->request->session();
	        $app_uniqueid = $session->read('app_unique_id');
            $start=$this->request->data['start_date'];
            $end=$this->request->data['end_date'];
            $query = "SELECT *FROM master_mepush_events WHERE master_mepush_events.app_id = '{$app_uniqueid}'AND master_mepush_events.modified BETWEEN '{$start}'AND '{$end}'";
            $pusheventData = $connectionServices->query($query)->fetchAll('assoc');

         $query = "SELECT * FROM master_mepush_custom WHERE master_mepush_custom.app_id = '{$app_uniqueid}'AND master_mepush_custom.modified BETWEEN '{$start}'AND '{$end}'";
		 $pushcustomData = $connectionServices->query($query)->fetchAll('assoc');	
		 if(isset($pusheventData) || isset($pushcustomData) && $pusheventData!='' && $pushcustomData!=''){
 		  $pushData=array_merge($pusheventData,$pushcustomData);
		  $this->set('pushData',$pushData);
		  $this->render('/Element/pushtable');
         	}else{ echo "no data";
			}
    
    
	
	}


}	

