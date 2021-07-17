<?php
	$jsonFile = '../../json/data.json';
	$jsonString = file_get_contents($jsonFile);
	$data = json_decode($jsonString, true);
	$data = (object) $data;
	
	/************************
	 *	Edit Basic Setting
	 ************************/
	if (isset($_FILES['cv']) && !empty($_FILES["cv"]["name"]))
	{
		$file = $_FILES['cv'];
		$fileTmp = $file['tmp_name'];
		$fileName = $file['name'];
		$fileExt = '.'.pathinfo($fileName, PATHINFO_EXTENSION);
		$fileNewName = date('Ymd').date('his').md5(uniqid(rand(), true)).$fileExt;

		// Delete old image if exists
		if (!empty($_POST['old_cv'])) {
			if (file_exists('../uploads/cv/'.$_POST['old_cv'])){
				unlink('../uploads/cv/'.$_POST['old_cv']);
			}
		}

		if ($fileExt == '.pdf' || $fileExt == '.docx'){
			// Upload file
			move_uploaded_file($fileTmp, '../uploads/cv/'.$fileNewName);
		}
		
		$data->cv = $fileNewName;
	}
	if (isset($_POST['direction']) && !empty($_POST['direction'])){
		$data->direction = $_POST['direction'];
	}
	if (isset($_POST['name']) && !empty($_POST['name'])){
		$data->name = $_POST['name'];
	}
	if (isset($_POST['title']) && !empty($_POST['title'])){
		$data->title = $_POST['title'];
	}

	if (isset($_POST['section_about_active']) && !empty($_POST['section_about_active'])){
		$data->section_about['active'] = $_POST['section_about_active'];
	}
	if (isset($_POST['section_education_active']) && !empty($_POST['section_education_active'])){
		$data->section_education['active'] = $_POST['section_education_active'];
	}
	if (isset($_POST['section_experience_active']) && !empty($_POST['section_experience_active'])){
		$data->section_experience['active'] = $_POST['section_experience_active'];
	}
	if (isset($_POST['section_skills_active']) && !empty($_POST['section_skills_active'])){
		$data->section_skills['active'] = $_POST['section_skills_active'];
	}
	if (isset($_POST['section_portfolio_active']) && !empty($_POST['section_portfolio_active'])){
		$data->section_portfolio['active'] = $_POST['section_portfolio_active'];
	}
	if (isset($_POST['section_achievements_active']) && !empty($_POST['section_achievements_active'])){
		$data->section_achievements['active'] = $_POST['section_achievements_active'];
	}
	if (isset($_POST['section_contact_active']) && !empty($_POST['section_contact_active'])){
		$data->section_contact['active'] = $_POST['section_contact_active'];
	}

	if (isset($_POST['section_about_title']) && !empty($_POST['section_about_title'])){
		$data->section_about['title'] = $_POST['section_about_title'];
	}
	if (isset($_POST['section_education_title']) && !empty($_POST['section_education_title'])){
		$data->section_education['title'] = $_POST['section_education_title'];
	}
	if (isset($_POST['section_experience_title']) && !empty($_POST['section_experience_title'])){
		$data->section_experience['title'] = $_POST['section_experience_title'];
	}
	if (isset($_POST['section_skills_title']) && !empty($_POST['section_skills_title'])){
		$data->section_skills['title'] = $_POST['section_skills_title'];
	}
	if (isset($_POST['section_portfolio_title']) && !empty($_POST['section_portfolio_title'])){
		$data->section_portfolio['title'] = $_POST['section_portfolio_title'];
	}
	if (isset($_POST['section_achievements_title']) && !empty($_POST['section_achievements_title'])){
		$data->section_achievements['title'] = $_POST['section_achievements_title'];
	}
	if (isset($_POST['section_contact_title']) && !empty($_POST['section_contact_title'])){
		$data->section_contact['title'] = $_POST['section_contact_title'];
	}


	/***********************
	 *	Edit About Section
	 ***********************/
	// Add
	if (isset($_POST['add_about_details']) && isset($_POST['add_about_title'])) 
	{
		array_push($data->about, [
			'title' => $_POST['add_about_title'],
			'details' => $_POST['add_about_details'],
		]);
	}
	if (isset($_POST['about_welcome']) && !empty($_POST['about_welcome'])){
		$data->about_welcome = $_POST['about_welcome'];
	}
	if (isset($_POST['about_summary']) && !empty($_POST['about_summary'])){
		$data->about_summary = $_POST['about_summary'];
	}
	if (isset($_FILES['image']) && !empty($_FILES["image"]["name"]))
	{
		$file = $_FILES['image'];
		$fileTmp = $file['tmp_name'];
		$fileName = $file['name'];
		$fileExt = '.'.pathinfo($fileName, PATHINFO_EXTENSION);
		$fileNewName = date('Ymd').date('his').md5(uniqid(rand(), true)).$fileExt;

		// Delete old image if exists
		if (!empty($_POST['old_image'])) {
			if (file_exists('../uploads/avatar/'.$_POST['old_image'])){
				unlink('../uploads/avatar/'.$_POST['old_image']);
			}
		}

		// Upload file
		move_uploaded_file($fileTmp, '../uploads/avatar/'.$fileNewName);

		$data->image = $fileNewName;
	}
	// Update
	if (!empty($_POST['about_title'])) 
	{
		foreach ($_POST['about_title'] as $key => $value) {
			$data->about[$key]['title'] = $_POST['about_title'][$key];
			$data->about[$key]['details'] = $_POST['about_details'][$key];
		}
	}
	// Delete
	if (isset($_GET['delete_about'])) {
		unset($data->about[$_GET['delete_about']]);
	}

	/**************************
	 *	Edit Education Section
	 **************************/
	// Add
	if (isset($_POST['add_education_details']) && isset($_POST['add_education_title']) && isset($_POST['add_education_date'])) 
	{
		array_push($data->education, [
			'date' => $_POST['add_education_date'],
			'title' => $_POST['add_education_title'],
			'details' => $_POST['add_education_details'],
		]);
	}
	// Update
	if (!empty($_POST['education_title'])) 
	{
		foreach ($_POST['education_title'] as $key => $value) {
			$data->education[$key]['date'] = $_POST['education_date'][$key];
			$data->education[$key]['title'] = $_POST['education_title'][$key];
			$data->education[$key]['details'] = $_POST['education_details'][$key];
		}
	}
	// Delete
	if (isset($_GET['delete_education'])) {
		unset($data->education[$_GET['delete_education']]);
	}

	/**************************
	 *	Edit Experience Section
	 **************************/
	// Add
	if (isset($_POST['add_experience_details']) && isset($_POST['add_experience_title']) && isset($_POST['add_experience_date'])) 
	{
		array_push($data->experience, [
			'date' => $_POST['add_experience_date'],
			'title' => $_POST['add_experience_title'],
			'details' => $_POST['add_experience_details'],
		]);
	}
	// Update
	if (!empty($_POST['experience_title'])) 
	{
		foreach ($_POST['experience_title'] as $key => $value) {
			$data->experience[$key]['date'] = $_POST['experience_date'][$key];
			$data->experience[$key]['title'] = $_POST['experience_title'][$key];
			$data->experience[$key]['details'] = $_POST['experience_details'][$key];
		}
	}
	// Update Summary
	if (isset($_POST['skills_summary']) && !empty($_POST['skills_summary'])){
		$data->skills_summary = $_POST['skills_summary'];
	}
	// Delete
	if (isset($_GET['delete_experience'])) {
		unset($data->experience[$_GET['delete_experience']]);
	}

	/**************************
	 *	Edit Skills Section
	 **************************/
	// Add
	if (isset($_POST['add_skill']) && isset($_POST['add_percentage'])) 
	{
		array_push($data->skills, [
			'skill' => $_POST['add_skill'],
			'percentage' => $_POST['add_percentage'],
		]);
	}
	// Update
	if (!empty($_POST['skills_skill'])) 
	{
		foreach ($_POST['skills_skill'] as $key => $value) {
			$data->skills[$key]['skill'] = $_POST['skills_skill'][$key];
			$data->skills[$key]['percentage'] = $_POST['skills_percentage'][$key];
		}
	}
	// Delete
	if (isset($_GET['delete_skills'])) {
		unset($data->skills[$_GET['delete_skills']]);
	}

	/**************************
	 *	Edit Portfolio Section
	 **************************/
	// Add
	if (isset($_POST['add_portfolio_title']) && isset($_POST['add_portfolio_link']) && isset($_POST['add_portfolio_details'])) 
	{
		if (isset($_FILES['add_portfolio_image']) && !empty($_FILES["add_portfolio_image"]["name"]))
		{
			$file = $_FILES['add_portfolio_image'];
			$fileTmp = $file['tmp_name'];
			$fileName = $file['name'];
			$fileExt = '.'.pathinfo($fileName, PATHINFO_EXTENSION);
			$fileNewName = date('Ymd').date('his').md5(uniqid(rand(), true)).$fileExt;

			// Upload file
			move_uploaded_file($fileTmp, '../uploads/portfolio/'.$fileNewName);

			array_push($data->portfolio, [
				'image' => $fileNewName,
				'title' => $_POST['add_portfolio_title'],
				'link' => $_POST['add_portfolio_link'],
				'details' => $_POST['add_portfolio_details'],
			]);
		}
	}
	// Update
	if (isset($_POST['portfolio_title']) && isset($_POST['portfolio_link']) && isset($_POST['portfolio_details']))
	{
		$key = $_POST['portfolio_key'];

		if (isset($_FILES['portfolio_image']) && !empty($_FILES["portfolio_image"]["name"]))
		{
			$file = $_FILES['portfolio_image'];
			$fileTmp = $file['tmp_name'];
			$fileName = $file['name'];
			$fileExt = '.'.pathinfo($fileName, PATHINFO_EXTENSION);
			$fileNewName = date('Ymd').date('his').md5(uniqid(rand(), true)).$fileExt;

			// Delete old file
			if (!empty($_POST['portfolio_old_image'])) {
				if (file_exists('../uploads/portfolio/'.$_POST['portfolio_old_image'])){
					unlink('../uploads/portfolio/'.$_POST['portfolio_old_image']);
				}
			}

			// Upload file
			move_uploaded_file($fileTmp, '../uploads/portfolio/'.$fileNewName);

			$data->portfolio[$key]['image'] = $fileNewName;
		}

		$data->portfolio[$key]['title'] = $_POST['portfolio_title'];
		$data->portfolio[$key]['link'] = $_POST['portfolio_link'];
		$data->portfolio[$key]['details'] = $_POST['portfolio_details'];
	}
	// Delete
	if (isset($_GET['delete_portfolio'])) {
		unset($data->portfolio[$_GET['delete_portfolio']]);
	}


	/*****************************
	 *	Edit Achievements Section
	 *****************************/
	// Add
	if (isset($_POST['add_achievements_details']) && isset($_POST['add_achievements_title']) && isset($_POST['add_achievements_icon'])) 
	{
		array_push($data->achievements, [
			'icon' => $_POST['add_achievements_icon'],
			'title' => $_POST['add_achievements_title'],
			'details' => $_POST['add_achievements_details'],
		]);
	}
	// Update
	if (!empty($_POST['achievements_title'])) 
	{
		foreach ($_POST['achievements_title'] as $key => $value) {
			$data->achievements[$key]['icon'] = $_POST['achievements_icon'][$key];
			$data->achievements[$key]['title'] = $_POST['achievements_title'][$key];
			$data->achievements[$key]['details'] = $_POST['achievements_details'][$key];
		}
	}
	// Delete
	if (isset($_GET['delete_achievements'])) {
		unset($data->achievements[$_GET['delete_achievements']]);
	}


	/*****************************
	 *	Edit Social Section
	 *****************************/
	// Add
	if (isset($_POST['add_social_icon']) && isset($_POST['add_social_link'])) 
	{
		array_push($data->social, [
			'icon' => $_POST['add_social_icon'],
			'link' => $_POST['add_social_link'],
		]);
	}
	// Update
	if (!empty($_POST['social_link'])) 
	{
		foreach ($_POST['social_link'] as $key => $value) {
			$data->social[$key]['icon'] = $_POST['social_icon'][$key];
			$data->social[$key]['link'] = $_POST['social_link'][$key];
		}
	}
	// Delete
	if (isset($_GET['delete_social'])) {
		unset($data->social[$_GET['delete_social']]);
	}

	/*************************
	 *	Edit Contact Section
	 *************************/
	if (isset($_POST['contact_email']) && !empty($_POST['contact_email'])){
		$data->contact[0]['email'] = $_POST['contact_email'];
	}
	if (isset($_POST['contact_phone']) && !empty($_POST['contact_phone'])){
		$data->contact[0]['phone'] = $_POST['contact_phone'];
	}
	if (isset($_POST['contact_address']) && !empty($_POST['contact_address'])){
		$data->contact[0]['address'] = $_POST['contact_address'];
	}

	$newJsonString = json_encode($data);
	file_put_contents($jsonFile, $newJsonString);

	// Redirect back
	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>