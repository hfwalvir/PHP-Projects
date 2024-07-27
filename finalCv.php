<?php
$fields = [
    'name', 'fname', 'gender', 'cnic', 'religion', 'country', 'email', 'contact', 
    'address', 'school', 'college', 'university', 'job_title', 'about_me'
];

foreach ($fields as $field) {
    $$field = $_POST["txt" . ucfirst($field)] ?? '';
}

$experiences = [];
for ($i = 1; $i <= 3; $i++) {
    if (!empty($_POST["txtJobTitle$i"]) && !empty($_POST["txtCompany$i"]) && !empty($_POST["txtJobPeriod$i"])) {
        $experiences[] = [
            'title' => $_POST["txtJobTitle$i"],
            'company' => $_POST["txtCompany$i"],
            'period' => $_POST["txtJobPeriod$i"]
        ];
    }
}

$skills = [];
for ($i = 1; $i <= 5; $i++) {
    if (!empty($_POST["txtSkill$i"]) && isset($_POST["txtSkillPercent$i"])) {
        $skills[] = [
            'name' => $_POST["txtSkill$i"],
            'percent' => intval($_POST["txtSkillPercent$i"])
        ];
    }
}

$interests = explode(',', $_POST['txtInterests'] ?? '');

echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - {$name}</title>
    <link rel="stylesheet" href="resume-styles.css">
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
<div class="resume">
    <div class="base">
      <div class="profile">
        <div class="photo">
          <i class="fas fa-user-circle fa-5x"></i>
        </div>
        <div class="info">
          <h1 class="name">{$name}</h1>
          <h2 class="job">{$job_title}</h2>
        </div>
      </div>
      <div class="about">
        <h3>About Me</h3> 
        <p>{$about_me}</p>
        <p>Father's Name: {$fname}</p>
      </div>
      <div class="contact">
        <h3>Contact Me</h3>
        <div class="call"><a href="tel:{$contact}"><i class="fas fa-phone"></i><span>{$contact}</span></a></div>
        <div class="address"><a href="#"><i class="fas fa-map-marker"></i><span>{$address}</span></a></div>
        <div class="email"><a href="mailto:{$email}"><i class="fas fa-envelope"></i><span>{$email}</span></a></div>
        <div class="gender"><i class="fas fa-venus-mars"></i><span>{$gender}</span></div>
        <div class="country"><i class="fas fa-globe"></i><span>{$country}</span></div>
        <div class="religion"><i class="fas fa-pray"></i><span>{$religion}</span></div>
      </div>
    </div>
    <div class="func">
      <div class="work">
        <h3><i class="fa fa-briefcase"></i>Experience</h3>
        <ul>
HTML;

foreach ($experiences as $exp) {
    echo "<li><span>{$exp['title']}</span><small>{$exp['company']}</small><small>{$exp['period']}</small></li>";
}

echo <<<HTML
        </ul>
      </div>
      <div class="edu">
        <h3><i class="fa fa-graduation-cap"></i>Education</h3>
        <ul>
          <li><span>University</span><small>{$university}</small></li>
          <li><span>College</span><small>{$college}</small></li>
          <li><span>High School</span><small>{$school}</small></li>
        </ul>
      </div>
      <div class="skills-prog">
        <h3><i class="fas fa-code"></i>Skills</h3>
        <ul>
HTML;

foreach ($skills as $skill) {
    echo <<<HTML
          <li data-percent="{$skill['percent']}"><span>{$skill['name']}</span>
            <div class="skills-bar">
              <div class="bar" style="width: {$skill['percent']}%"></div>
            </div>
          </li>
HTML;
}

echo <<<HTML
        </ul>
      </div>
      <div class="interests">
        <h3><i class="fas fa-star"></i>Interests</h3>
        <div class="interests-items">
HTML;

foreach ($interests as $interest) {
    echo "<div class='interest'><i class='fas fa-heart'></i><span>" . trim($interest) . "</span></div>";
}

echo <<<HTML
        </div>
      </div>
    </div>
  </div>
</body>
</html>
HTML;
?>
