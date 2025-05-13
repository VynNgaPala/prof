function inputs() {
  const Fullname = document.getElementById('fullname');
  const Email = document.getElementById('email');
  const Password = document.getElementById('password');
  const Conpass = document.getElementById('confirm-password');
  const isJobSeeker = document.getElementById('job-seeker');
  const isEmployer = document.getElementById('employer');

  if (isJobSeeker.checked && isEmployer.checked) {
    alert("You can't be both a job seeker and an employer");
  } else if (!isJobSeeker.checked && !isEmployer.checked) {
    alert("You must be either a job seeker or an employer");
  } else if (Password.value !== Conpass.value) {
    alert("Passwords do not match");
  } else {
    console.log(Fullname.value);
    console.log(Email.value);
    console.log(Password.value);

    if (isJobSeeker.checked) {
      console.log('User is a Job Seeker');
    } else if (isEmployer.checked) {
      console.log('User is an Employer');
    }
  }
}
