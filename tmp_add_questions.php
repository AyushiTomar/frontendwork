<?php /* Template Name: tmp_add_questions */ ?>

<?php
get_header();
include_once("connection.php");
 ?>


<div id="primary" class="content-area boxed">
		
	<form id = "frm_add_questions">
		<div id = "main_container">
				<input type = "button" name = "logout" value = "Logout" class = "top_btns">
				<a href = " http://localhost/wordpress/dashboard/" ><input type = "button" name = "dashboard" value = "Dashboard" class = "top_btns"></a>
				
				
					<div id = "sub_container">

						<table width = "100%" id = "add_test_table">
							<tr>
								<th colspan = 2 id = "table_heading">Add Questions for test</th>
							</tr>
							<tr>
								<td id = "label"><label for = "question_no">Question No. : </label></td>
								<td id = "textbox"><input type = "text" name = "question_no" placeholder = "Question No." id="question_no" class = "input_buttons1"> <input type = "button" name = "search" id = "search_question" value = "Search" style = "background:url(http://localhost/wordpress_onlinetest/wp-content/uploads/2016/10/search-e1477304610896.jpg) no-repeat;"></td>
							</tr>
							<tr>
								<td><label for = "question">Question : </label></td>
								<td><textarea name = "question" placeholder = "Enter Question Here" id="question" rows = 3 cols = 25></textarea> </td>
							</tr>	
							<tr>
								<td><label for = "Option_1">Option 1: </label></td>
								<td><td id = "textbox"><input type = "text" name = "option1" placeholder = "Option 1" id="option1" class = "input_buttons1"> </td>
							</tr>
							<tr>
								<td><label for = "Option_2">Option 2: </label></td>
								<td><td id = "textbox"><input type = "text" name = "option2" placeholder = "Option 2" id="option2" class = "input_buttons1"> </td>
							</tr>
							<tr>
								<td><label for = "Option_3">Option 3: </label></td>
								<td><td id = "textbox"><input type = "text" name = "option3" placeholder = "Option 3" id="option3" class = "input_buttons1"> </td>
							</tr>	
							<tr>
								<td><label for = "Option_4">Option 4: </label></td>
								<td><td id = "textbox"><input type = "text" name = "option4" placeholder = "Option 4" id="option4" class = "input_buttons1"> </td>
							</tr>	
							<tr>
								<td><label for = "correct_answer">Correct Answer: </label></td>
								<td id = "dropdown"><select id = "correct_answer">
									<option value="option1">Choose the correct answer</option>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
									<option value="option4">Option 4</option>
								</select> </td>
								<td id = "dropdown"><select id = "correct_answer" multiple = "multiple">
									<option value="option1">Choose the correct answer</option>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
									<option value="option4">Option 4</option>
									</select>
									<select id="chkveg" multiple="multiple">
								<option value="option1">Choose the correct answer</option>
									<option value="option1">Option 1</option>
									<option value="option2">Option 2</option>
									<option value="option3">Option 3</option>
									<option value="option4">Option 4</option>
									</select><br /><br />

								 </td>
							</tr>	
							<tr>
								<td><label for = "marks">Marks : </label></td>
								<td><input type="number" min="1" max="5" step="1" value="1" name = "marks" id="marks" class = "input_buttons1" placeholder = "Marks for question"></td>
							</tr>	
						
							<tr>
								<td><input type = "button" value = "Save" name = "submit" id = "submit" onClick = "openAddQuestions()" style="background:url(http://localhost/wordpress/wp-content/uploads/2016/10/save-e1477299045595-1.jpg) no-repeat;"></td>
								<td><input type = "reset" value = "Reset" name = "reset" id = "reset" style="background:url(http://localhost/wordpress/wp-content/uploads/2016/10/save-e1477299045595-1.jpg) no-repeat;"></td>
							</tr>
  						</table>       
  					</div>
           <?php   
               		 	
//$id=$_POST['id'];
						/*if(isset($_POST['submit'])) {
						
						$user_name=$_POST['user_name'];
						$password=$_POST['user_pwd'];

						$rs="insert into user_login(user_name, password)
						values('$user_name','$password')";
						$result=(mysql_query($rs,$conn)) or die (mysql_error());

						}	 
						
						//echo "inserted";
                /*  	  global $wpdb;
               		     $userlogin_table = $wpdb->prefix."user_login";
                		  $data=array(
							"user_name"=> $_POST['user_name'],
 							"password"=> $_POST['user_pwd']
							);
						  $wpdb->insert( $userlogin_table, $data);
                    */
             	  ?> 
             </div>
        </form>
           
	</div>

	<script type="text/javascript">
		function openAddQuestions() {
			window.location.assign("http://localhost/wordpress_onlinetest/test-add-success/");
		}
	</script>
 <?php get_footer(); ?>
