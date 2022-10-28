<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Static Login</title>
</head>
<body>
 
    <div class="container w-50 my-5">
        <div class="d-flex justify-content-center">
            <div class="card mt-5 text-center">
                <div class="card-body">
					<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
					<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
					<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
					</svg>

                <br>

                <form method="post">
 
                <select class="form-select form-control mt-3" aria-label="userStatus" name="userType">
                    <option value="Admin" selected>Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System User">System User</option>
                </select>

                	<input type="text" class="form-control" name="userName" placeholder="userName">

                	<input type="password" class="form-control mt-3" name="userPass" placeholder="Password">
					
                		<button type="submit" class="btn btn-primary mt-3 w-100" name="signIn">Sign in</button>

                     </form>

                </div>
            </div>  
		</div>
    </div>

	<div class="container w-25 text-center">

			<?php  
				$users = array(
					array(
						'type' => 'Admin',
						'username' => 'admin',
						'password' => 'Pass1234',
					),

					array(
						'type' => 'Admin',
						'username' => 'renmark',
						'password' => 'Pogi1234',
					),

					array(
						'type' => 'Content Manager',
						'username' => 'pepito',
						'password' => 'manaloto',
					),

					array(
						'type' => 'Content Manager',
						'username' => 'juan',
						'password' => 'delacruz',
					),

					array(
						'type' => 'System User',
						'username' => 'pedro',
						'password' => 'penduko',
					),
				);

					
					if (isset($_POST['signIn'])) {
					$status = $_POST['userType'];
					$name = $_POST['userName'];
					$password = $_POST['userPass'];


					if ($status === $users[0]['type']) {
						if ($name === $users[0]['username']) {
							if ($password === $users[0]['password']) {
								echo 
								'<div class="alert alert-success mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
						}									
						else{
							echo 
							'<div class="alert alert-danger mt-3" role="alert">
								Invalid Username / Password
							</div>';
						}
					}
					elseif ($status === $users[1]['type']) {
						if ($name === $users[1]['username']) {
							if ($password === $users[1]['password']) {
								echo 
								'<div class="alert alert-success mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
						}									
						else{
							echo 
							'<div class="alert alert-danger mt-3" role="alert">
								Invalid Username / Password
							</div>';
						}
					}
					elseif ($status === $users[2]['type']) {
						if ($name === $users[2]['username']) {
							if ($password === $users[2]['password']) {
								echo 
								'<div class="alert alert-success mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
						}									
						else{
							echo 
							'<div class="alert alert-danger mt-3" role="alert">
								Invalid Username / Password
							</div>';
						}
					}
					elseif ($status === $users[4]['type']) {
						if ($name === $users[3]['username']) {
							if ($password === $users[3]['password']) {
								echo 
								'<div class="alert alert-success mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
						}									
						else{
							echo 
							'<div class="alert alert-danger mt-3" role="alert">
								Invalid Username / Password
							</div>';
						}
					}
					elseif ($status === $users[4]['type']) {
						if ($name === $users[4]['username']) {
							if ($password === $users[4]['password']) {
								echo 
								'<div class="alert alert-success mt-3" role="alert">
									Welcome to the System: '. $name .'
								</div>';
							}
							else{
								echo 
								'<div class="alert alert-danger mt-3" role="alert">
									Invalid Username / Password
								</div>';
							}
						}									
						else{
							echo 
							'<div class="alert alert-danger mt-3" role="alert">
								Invalid Username / Password
							</div>';
						}
					}
					else{
						echo 
						'<div class="alert alert-danger mt-3" role="alert">
							Invalid Username / Password
						</div>';
					}
				}
				
			?>
		</div>
		

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>