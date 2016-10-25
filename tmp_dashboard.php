<?php /* Template Name: tmp_dashboard */ ?>

<?php
get_header(); ?>
	<div id="primary" class="content-area boxed">
		<form>
			<div id = "btn_list">
				<ul id = "ul_btn">
					<li class = "li_btn"><a href="http://localhost/wordpress_onlinetest/manage-test-dashboard/"><input name="manage_tests" type="button" id = "btn_manage_test" class = "input_btn" value="Manage Tests" /></a></li>
					<li class = "li_btn"><a href="http://localhost/wordpress_onlinetest/add_test_category/"><input name="manage_questions" type="button" id = "btn_manage_questions" class = "input_btn" value="Manage Questions" /></a></li>
					<li class = "li_btn"><a href="http://localhost/wordpress_onlinetest/add_test_category/"><input name="manage_students" type="button" id = "btn_manage_students" class = "input_btn" value="Manage Students" /></a></li>
					<li class = "li_btn"><a href="http://localhost/wordpress_onlinetest/add_test_category/"><input name="manage_users" type="button" id = "btn_manage_users" class = "input_btn" value="Manage Users" /></a></li>
				</ul>
			</div>
		</form>
</div>
<?php get_footer(); ?>