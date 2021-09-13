<?php
	include "class_code/config.php";
?>




	<!DOCTYPE html>
	<!-- saved from url=(0051)https://smarthr.dreamguystech.com/orange/tasks.html -->
	<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
			<script
  src="jquery.min.js"></script>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
      apiKey: "AIzaSyCIqd8b7ioJz9_9M_XlSSZdVRxOy2tyrxw",
    authDomain: "demotodolist-38d60.firebaseapp.com",
    databaseURL: "https://demotodolist-38d60-default-rtdb.firebaseio.com",
    projectId: "demotodolist-38d60",
    storageBucket: "demotodolist-38d60.appspot.com",
    messagingSenderId: "506549109371",
    appId: "1:506549109371:web:1c9a7c79f686f7a04fd8de"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

</script>

	        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
	        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	        <meta name="description" content="Smarthr - Bootstrap Admin Template">
			<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
	        <meta name="robots" content="noindex, nofollow">
	        <title>Tasks</title>
			
			<!-- Favicon -->
	        <link rel="shortcut icon" type="image/x-icon" href="https://smarthr.dreamguystech.com/orange/assets/img/favicon.png">
			
			<!-- Bootstrap CSS -->
	        <link rel="stylesheet" href="./Tasks - HRMS admin template_files/bootstrap.min.css">
			
			<!-- Fontawesome CSS -->
	        <link rel="stylesheet" href="./Tasks - HRMS admin template_files/font-awesome.min.css">
			
			<!-- Lineawesome CSS -->
	        <link rel="stylesheet" href="./Tasks - HRMS admin template_files/line-awesome.min.css">
			
			<!-- Select2 CSS -->
			<link rel="stylesheet" href="./Tasks - HRMS admin template_files/select2.min.css">
			
			<!-- Datetimepicker CSS -->
			<link rel="stylesheet" href="./Tasks - HRMS admin template_files/bootstrap-datetimepicker.min.css">
			
			<!-- Summernote CSS -->
			<link rel="stylesheet" href="./Tasks - HRMS admin template_files/summernote-bs4.css">
			
			<!-- Main CSS -->
	        <link rel="stylesheet" href="./Tasks - HRMS admin template_files/style.css">
			
			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.min.js"></script>
				<script src="assets/js/respond.min.js"></script>
			<![endif]-->
	    </head>
	    <body>



	    	<script type="text/javascript">
	    		firebase
	    		.database()
	    		.ref('9106994543/Task')
	    		.on('value',(snapshot)=>{
	    			var taskList=document.getElementById('task-list');
	    				    			taskList.innerHTML="";

	    			// console.log(snapshot.val());
	    			// // let data=snapshot.val()
	    			let data = Object.values(snapshot.val());


	    			data.map((val)=>{
	    				console.log(val['taskName']);
	    			
	    				taskList.innerHTML+=`<li class="task">
																					<div class="task-container">
																						<span class="task-action-btn task-check">
																							<span class="action-circle large complete-btn" title="Mark Complete">
																								<i class="material-icons">check</i>
																							</span>
																						</span>
																						<span class="task-label" contenteditable="true"
																						onblur="Update('${val['key']}',this.innerHTML)" 
																						>${val['taskName']}</span>
																							<span class="task-action-btn task-btn-right">
																								<!-- <span class="action-circle large" title="Assign">
																									<i class="material-icons">person_add</i>
																								</span> -->
																							<span class="action-circle large delete-btn" title="Delete Task" onclick="DeleteTask('${val['key']}')">
																									<i class="material-icons">delete</i>
																							</span>
																						</span>
																					</div>
																				</li>`


	    				let tmp=Object.values(val);
	    				// tmp.map((val)=>{
	    				// 	// console.log('from the tasl'+val);

	    				// 	taskList.innerHTML+=

	    				// })	

	    			})	
	    		});
	    	</script>


			<!-- Main Wrapper -->
	        <div class="main-wrapper">
			
				<!-- Header -->
	       <!--      	<?php
						// include_once "header.php";
					?> -->
				<!-- /Header -->
				
				<!-- Sidebar -->
	            <div class="sidebar" id="sidebar">
	                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 690px;"><div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: 690px;">
						<div class="sidebar-menu">
							<ul>
								<li> 
									<a href="index.php"><i class="la la-home"></i> <span>Back to Home</span></a>
								</li>
							</ul>
						</div>
	                </div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 690px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
	            </div>
				<!-- /Sidebar -->
				
				<!-- Page Wrapper -->
	            <div class="page-wrapper" style="min-height: 750px;">
					<div class="chat-main-row">
						<div class="chat-main-wrapper">
							<div class="col-lg-7 message-view task-view task-left-sidebar">
	<!-- Chat Window Open -->
								<div class="chat-window">
									<div class="fixed-header">
										<div class="navbar">
											<div class="float-left mr-auto">
												<div class="add-task-btn-wrapper">
													<span class="add-task-btn btn btn-white btn-sm">
														Add Task
													</span>
												</div>
											</div>
											<a class="task-chat profile-rightbar float-right" id="task_chat" href="https://smarthr.dreamguystech.com/orange/tasks.html#task_window"><i class="fa fa fa-comment"></i></a>
										</div>
									</div>

	<!-- Task WIndow -->
									<div class="chat-contents">
										<div class="chat-content-wrap">
											<div class="chat-wrap-inner">
												<div class="chat-box">
													<div class="task-wrapper">
														<div class="task-list-container">
															<div class="task-list-body">
																<ul id="task-list">
																	<!--  -->
																</ul>
															</div>
	<!-- Add Task Window -->
															<div class="task-list-footer">
																<div class="new-task-wrapper">
																	<textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
																	<span class="error-message hidden">You need to enter a task first</span>
																	<span onclick="Addtask()" class="add-new-task-btn btn" id="add-task">Add Task</span>
																	<span class="btn" id="close-task-panel">Close</span>
																</div>
															</div>

											<script type="text/javascript">
														

												$('#new-task').keydown(function(event){
												// Get the code of the key that is pressed
												var keyCode = event.keyCode;
												var enterKeyCode = 13;
												var escapeKeyCode = 27;

												// If error message is already displayed, hide it.
												if($('#new-task').hasClass('error')){
													console.log("e");
													return;
												}
												// If key code is that of Enter Key then call addTask Function
												if(keyCode == enterKeyCode){
													var val=document.getElementById("new-task");

													var date= new Date();
													var TaskId=
													firebase
													.database()
													.ref('9106994543/Task').push().key;

													firebase
													.database()
													.ref('9106994543/Task')
													.child(TaskId)
													.set({
														Description:'',
														key:TaskId,
														taskDate:date.getTime(),
														taskName:val.value
													})
													console.log(TaskId);

												}
												// If key code is that of Esc Key then call closeNewTaskPanel Function
												else if(keyCode == escapeKeyCode)
													console.log("not key");

											});

												function Update(task_id,val){
													firebase
													.database()
													.ref('9106994543/Task')
													.child(task_id)
													.set({
														taskName:val,
													})
												}



												function Addtask(){
													var val=document.getElementById("new-task");

													var date= new Date();
													var TaskId=
													firebase
													.database()
													.ref('9106994543/Task')
													.child().push.key;

													firebase
													.database()
													.ref('9106994543/Task')
													.child(TaskId)
													.set({
														Description:'',
														key:TaskId,
														taskDate:date.getTime(),
														taskName:val.value
													})
												}
												function DeleteTask(task_id){
													firebase
													.database()
													.ref('9106994543/Task')
													.child(task_id)
													.remove();	
												}
											</script>

	<!-- Close Add Task window -->
														</div>

													</div>
													<div class="notification-popup hide">
														<p>
															<span class="task"></span>
															<span class="notification-text"></span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
	<!-- /Close Task Window -->
								</div>
	<!--/ CLose Chat Window -->
							</div>

	<!-- Chat Side Window -->
							
	<!-- /Close Side Chat Window  -->
						</div>
					</div>
					
					<!-- Create Project Modal -->
					<div id="create_project" class="modal custom-modal fade" role="dialog">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Create Project</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Project Name</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Client</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-1-d9kl" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-3-i8ho">Global Technologies</option>
														<option>Delta Infotech</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-7nen" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-bj7f-container" aria-controls="select2-bj7f-container"><span class="select2-selection__rendered" id="select2-bj7f-container" role="textbox" aria-readonly="true" title="Global Technologies">Global Technologies</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Start Date</label>
													<div class="cal-icon">
														<input class="form-control datetimepicker" type="text">
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>End Date</label>
													<div class="cal-icon">
														<input class="form-control datetimepicker" type="text">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3">
												<div class="form-group">
													<label>Rate</label>
													<input placeholder="$50" class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<label>&nbsp;</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-4-7d5c" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-6-tav7">Hourly</option>
														<option>Fixed</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-jyl9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-lcv1-container" aria-controls="select2-lcv1-container"><span class="select2-selection__rendered" id="select2-lcv1-container" role="textbox" aria-readonly="true" title="Hourly">Hourly</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Priority</label>
													<select class="select select2-hidden-accessible" data-select2-id="select2-data-7-7ljm" tabindex="-1" aria-hidden="true">
														<option data-select2-id="select2-data-9-55wa">High</option>
														<option>Medium</option>
														<option>Low</option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-8-x240" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-jotj-container" aria-controls="select2-jotj-container"><span class="select2-selection__rendered" id="select2-jotj-container" role="textbox" aria-readonly="true" title="High">High</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Add Project Leader</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Team Leader</label>
													<div class="project-members">
														<a class="avatar" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-toggle="tooltip" title="" data-original-title="Jeffery Lalor">
															<img alt="" src="./Tasks - HRMS admin template_files/avatar-16.jpg">
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label>Add Team</label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Team Members</label>
													<div class="project-members">
														<a class="avatar" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-toggle="tooltip" title="" data-original-title="John Doe">
															<img alt="" src="./Tasks - HRMS admin template_files/avatar-02.jpg">
														</a>
														<a class="avatar" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-toggle="tooltip" title="" data-original-title="Richard Miles">
															<img alt="" src="./Tasks - HRMS admin template_files/avatar-09.jpg">
														</a>
														<a class="avatar" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-toggle="tooltip" title="" data-original-title="John Smith">
															<img alt="" src="./Tasks - HRMS admin template_files/avatar-10.jpg">
														</a>
														<a class="avatar" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-toggle="tooltip" title="" data-original-title="Mike Litorus">
															<img alt="" src="./Tasks - HRMS admin template_files/avatar-05.jpg">
														</a>
														<span class="all-team">+2</span>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label>Description</label>
											<textarea rows="4" class="form-control summernote" placeholder="Enter your message here" style="display: none;"></textarea><div class="note-editor note-frame card"><div class="note-dropzone">  <div class="note-dropzone-message"></div></div><div class="note-toolbar card-header" role="toolbar"><div class="note-btn-group btn-group note-style"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-original-title="Style"><i class="note-icon-magic"></i></button><div class="dropdown-menu dropdown-style" role="list" aria-label="Style"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="p" role="listitem" aria-label="p"><p>Normal</p></a><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="blockquote" role="listitem" aria-label="[object Object]"><blockquote class="blockquote">Blockquote</blockquote></a><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="h1" role="listitem" aria-label="h1"><h1>Header 1</h1></a><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="h2" role="listitem" aria-label="h2"><h2>Header 2</h2></a><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="h3" role="listitem" aria-label="h3"><h3>Header 3</h3></a><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="h4" role="listitem" aria-label="h4"><h4>Header 4</h4></a><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="h5" role="listitem" aria-label="h5"><h5>Header 5</h5></a><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="h6" role="listitem" aria-label="h6"><h6>Header 6</h6></a></div></div></div><div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" role="button" tabindex="-1" title="" aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" role="button" tabindex="-1" title="" aria-label="Underline (CTRL+U)" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Remove Font Style (CTRL+\)" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div><div class="note-btn-group btn-group note-fontname"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Font Family" data-original-title="Font Family"><span class="note-current-fontname" style="font-family: CircularStd;">CircularStd</span></button><div class="dropdown-menu note-check dropdown-fontname" role="list" aria-label="Font Family"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Arial" role="listitem" aria-label="Arial"><i class="note-icon-menu-check"> <span style="font-family: &#39;Arial&#39;">Arial</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Arial Black" role="listitem" aria-label="Arial Black"><i class="note-icon-menu-check"> <span style="font-family: &#39;Arial Black&#39;">Arial Black</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Comic Sans MS" role="listitem" aria-label="Comic Sans MS"><i class="note-icon-menu-check"> <span style="font-family: &#39;Comic Sans MS&#39;">Comic Sans MS</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Courier New" role="listitem" aria-label="Courier New"><i class="note-icon-menu-check"> <span style="font-family: &#39;Courier New&#39;">Courier New</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Helvetica" role="listitem" aria-label="Helvetica"><i class="note-icon-menu-check"> <span style="font-family: &#39;Helvetica&#39;">Helvetica</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Impact" role="listitem" aria-label="Impact"><i class="note-icon-menu-check"> <span style="font-family: &#39;Impact&#39;">Impact</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Tahoma" role="listitem" aria-label="Tahoma"><i class="note-icon-menu-check"> <span style="font-family: &#39;Tahoma&#39;">Tahoma</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Times New Roman" role="listitem" aria-label="Times New Roman"><i class="note-icon-menu-check"> <span style="font-family: &#39;Times New Roman&#39;">Times New Roman</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="Verdana" role="listitem" aria-label="Verdana"><i class="note-icon-menu-check"> <span style="font-family: &#39;Verdana&#39;">Verdana</span></i></a><i class="note-icon-menu-check"><a class="dropdown-item checked" href="https://smarthr.dreamguystech.com/orange/tasks.html#" data-value="CircularStd" role="listitem" aria-label="CircularStd"><i class="note-icon-menu-check"> <span style="font-family: &#39;CircularStd&#39;">CircularStd</span></i></a></i></i></i></i></i></i></i></i></i></div></div></div><div class="note-btn-group btn-group note-color"><div class="note-btn-group btn-group note-color note-color-all"><button type="button" class="note-btn btn btn-light btn-sm note-current-color-button" role="button" tabindex="-1" title="" aria-label="Recent Color" data-original-title="Recent Color" data-backcolor="#FFFF00"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0);"></i></button><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color" data-original-title="More Color"></button><div class="dropdown-menu" role="list"><div class="note-palette">  <div class="note-palette-title">Background Color</div>  <div>    <button type="button" class="note-color-reset btn btn-light" data-event="backColor" data-value="inherit">Transparent    </button>  </div>  <div class="note-holder" data-event="backColor">  <div>    <button type="button" class="note-color-select btn" data-event="openPalette" data-value="backColorPicker">Select    </button>    <input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette">  </div>  <div class="note-holder-custom" id="backColorPalette" data-event="backColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div></div></div><div class="note-palette">  <div class="note-palette-title">Foreground Color</div>  <div>    <button type="button" class="note-color-reset btn btn-light" data-event="removeFormat" data-value="foreColor">Reset to default    </button>  </div>  <div class="note-holder" data-event="foreColor">  <div>    <button type="button" class="note-color-select btn" data-event="openPalette" data-value="foreColorPicker">Select    </button>    <input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette">  <div class="note-holder-custom" id="foreColorPalette" data-event="foreColor"><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div></div></div></div><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div></div></div></div><div class="note-color-palette"><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div><div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div></div></div></div></div></div></div><div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Unordered list (CTRL+SHIFT+NUM7)" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Ordered list (CTRL+SHIFT+NUM8)" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Paragraph" data-original-title="Paragraph"><i class="note-icon-align-left"></i></button><div class="dropdown-menu" role="list"><div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align left (CTRL+SHIFT+L)" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align center (CTRL+SHIFT+E)" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Align right (CTRL+SHIFT+R)" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Justify full (CTRL+SHIFT+J)" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div><div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Outdent (CTRL+[)" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Indent (CTRL+])" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div></div></div></div><div class="note-btn-group btn-group note-table"><div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Table" data-original-title="Table"><i class="note-icon-table"></i></button><div class="dropdown-menu note-table" role="list" aria-label="Table"><div class="note-dimension-picker">  <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;">  <div class="note-dimension-picker-highlighted">  <div class="note-dimension-picker-unhighlighted"></div><div class="note-dimension-display">1 x 1</div></div></div></div></div></div></div><div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Link (CTRL+K)" data-original-title="Link (CTRL+K)"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Picture" data-original-title="Picture"><i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Video" data-original-title="Video"><i class="note-icon-video"></i></button></div><div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-light btn-sm btn-fullscreen" role="button" tabindex="-1" title="" aria-label="Full Screen" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-codeview" role="button" tabindex="-1" title="" aria-label="Code View" data-original-title="Code View"><i class="note-icon-code"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Help" data-original-title="Help"><i class="note-icon-question"></i></button></div></div><div class="note-editing-area"><div class="note-handle"><div class="note-control-selection"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><textarea class="note-codable" role="textbox" aria-multiline="true"></textarea><div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" style="height: 200px;"><p><br></p></div></div><output class="note-status-output" aria-live="polite"><div class="note-statusbar" role="status">  <output class="note-status-output" aria-live="polite"></output>  <div class="note-resizebar" role="seperator" aria-orientation="horizontal" aria-label="Resize">    <div class="note-icon-bar">    <div class="note-icon-bar">    <div class="note-icon-bar">  </div></div></div></div></div></output><div class="modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <h4 class="modal-title">Insert Link</h4>      <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    </div>    <div class="modal-body"><div class="form-group note-form-group"><label class="note-form-label">Text to display</label><input class="note-link-text form-control note-form-control note-input" type="text"></div><div class="form-group note-form-group"><label class="note-form-label">To what URL should this link go?</label><input class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div><div class="form-check sn-checkbox-open-in-new-window"><label class="form-check-label"> <input role="checkbox" type="checkbox" class="form-check-input" checked="" aria-label="Open in new window" aria-checked="true"> Open in new window</label></div></div>    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <h4 class="modal-title">Insert Image</h4>      <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    </div>    <div class="modal-body"><div class="form-group note-form-group note-group-select-from-files"><label class="note-form-label">Select from files</label><input class="note-image-input note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div><div class="form-group note-group-image-url" style="overflow:auto;"><label class="note-form-label">Image URL</label><input class="note-image-url form-control note-form-control note-input  col-md-12" type="text"></div></div>    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <h4 class="modal-title">Insert Video</h4>      <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    </div>    <div class="modal-body"><div class="form-group note-form-group row-fluid"><label class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input class="note-video-url form-control note-form-control note-input" type="text"></div></div>    <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div>  </div></div></div><div class="modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help"><div class="modal-dialog">  <div class="modal-content">    <div class="modal-header">      <h4 class="modal-title">Help</h4>      <button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>    </div>    <div class="modal-body" style="max-height: 300px; overflow: scroll;"><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span><div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span></div>    <div class="modal-footer"><p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.11</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p></div>  </div></div></div></div>
										</div>
										<div class="form-group">
											<label>Upload Files</label>
											<input class="form-control" type="file">
										</div>
										<div class="submit-section">
											<button class="btn btn-primary submit-btn">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /Create Project Modal -->
					
					<!-- Assignee Modal -->
					<div id="assignee" class="modal custom-modal fade" role="dialog">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Assign to this task</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="input-group m-b-30">
										<input placeholder="Search to add" class="form-control search-input" type="text">
										<span class="input-group-append">
											<button class="btn btn-primary">Search</button>
										</span>
									</div>
									<div>
										<ul class="chat-user-list">
											<li>
												<a href="https://smarthr.dreamguystech.com/orange/tasks.html#">
													<div class="media">
														<span class="avatar"><img alt="" src="./Tasks - HRMS admin template_files/avatar-09.jpg"></span>
														<div class="media-body align-self-center text-nowrap">
															<div class="user-name">Richard Miles</div>
															<span class="designation">Web Developer</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="https://smarthr.dreamguystech.com/orange/tasks.html#">
													<div class="media">
														<span class="avatar"><img alt="" src="./Tasks - HRMS admin template_files/avatar-10.jpg"></span>
														<div class="media-body align-self-center text-nowrap">
															<div class="user-name">John Smith</div>
															<span class="designation">Android Developer</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="https://smarthr.dreamguystech.com/orange/tasks.html#">
													<div class="media">
														<span class="avatar">
															<img alt="" src="./Tasks - HRMS admin template_files/avatar-16.jpg">
														</span>
														<div class="media-body align-self-center text-nowrap">
															<div class="user-name">Jeffery Lalor</div>
															<span class="designation">Team Leader</span>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Assign</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Assignee Modal -->
					
					<!-- Task Followers Modal -->
					<div id="task_followers" class="modal custom-modal fade" role="dialog">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add followers to this task</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="input-group m-b-30">
										<input placeholder="Search to add" class="form-control search-input" type="text">
										<span class="input-group-append">
											<button class="btn btn-primary">Search</button>
										</span>
									</div>
									<div>
										<ul class="chat-user-list">
											<li>
												<a href="https://smarthr.dreamguystech.com/orange/tasks.html#">
													<div class="media">
														<span class="avatar"><img alt="" src="./Tasks - HRMS admin template_files/avatar-16.jpg"></span>
														<div class="media-body media-middle text-nowrap">
															<div class="user-name">Jeffery Lalor</div>
															<span class="designation">Team Leader</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="https://smarthr.dreamguystech.com/orange/tasks.html#">
													<div class="media">
														<span class="avatar"><img alt="" src="./Tasks - HRMS admin template_files/avatar-08.jpg"></span>
														<div class="media-body media-middle text-nowrap">
															<div class="user-name">Catherine Manseau</div>
															<span class="designation">Android Developer</span>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="https://smarthr.dreamguystech.com/orange/tasks.html#">
													<div class="media">
														<span class="avatar"><img alt="" src="./Tasks - HRMS admin template_files/avatar-26.jpg"></span>
														<div class="media-body media-middle text-nowrap">
															<div class="user-name">Wilmer Deluna</div>
															<span class="designation">Team Leader</span>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Add to Follow</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Task Followers Modal -->
					
	            </div>
				<!-- /Page Wrapper -->

	        </div>
			<!-- /Main Wrapper -->

			<!-- jQuery -->
	        <script src="./Tasks - HRMS admin template_files/jquery-3.5.1.min.js.download"></script>

			<!-- Bootstrap Core JS -->
	        <script src="./Tasks - HRMS admin template_files/popper.min.js.download"></script>
	        <script src="./Tasks - HRMS admin template_files/bootstrap.min.js.download"></script>

			<!-- Slimscroll JS -->
			<script src="./Tasks - HRMS admin template_files/jquery.slimscroll.min.js.download"></script>
			
			<!-- Select2 JS -->
			<script src="./Tasks - HRMS admin template_files/select2.min.js.download"></script>
			
			<!-- Datetimepicker JS -->
			<script src="./Tasks - HRMS admin template_files/moment.min.js.download"></script>
			<script src="./Tasks - HRMS admin template_files/bootstrap-datetimepicker.min.js.download"></script>

			<!-- Summernote JS -->
			<script src="./Tasks - HRMS admin template_files/summernote-bs4.min.js.download"></script>
			
			<!-- Task JS -->
			<script src="./Tasks - HRMS admin template_files/task.js.download"></script>

			<!-- Custom JS -->
			<script src="./Tasks - HRMS admin template_files/app.js.download"></script>

	    
	<div class="sidebar-overlay"></div><div class="note-popover popover in note-link-popover bottom">  <div class="arrow">  <div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span><div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Edit" data-original-title="Edit"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Unlink" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button></div></div></div></div><div class="note-popover popover in note-image-popover bottom">  <div class="arrow">  <div class="popover-content note-children-container"><div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Resize Full" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Resize Half" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Resize Quarter" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button></div><div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Float Left" data-original-title="Float Left"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Float Right" data-original-title="Float Right"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Float None" data-original-title="Float None"><i class="note-icon-align-justify"></i></button></div><div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Remove Image" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div></div></div></div><div class="note-popover popover in note-table-popover bottom">  <div class="arrow">  <div class="popover-content note-children-container"><div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Add row below" data-original-title="Add row below"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Add row above" data-original-title="Add row above"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Add column left" data-original-title="Add column left"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Add column right" data-original-title="Add column right"><i class="note-icon-col-after"></i></button></div><div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Delete row" data-original-title="Delete row"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Delete column" data-original-title="Delete column"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Delete table" data-original-title="Delete table"><i class="note-icon-trash"></i></button></div></div></div></div>


	</body></html>	