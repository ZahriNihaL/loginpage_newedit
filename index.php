<?php

session_start();
if(!isset($_SESSION["loggedin"]))
{
header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Dashboard</title>

    
</head>

<body>
    <div class="row min-vh-100 g-0">
        <div class="col-lg-2 sidebar-left">
            <div class="profile d-flex mt-3 mx-3">
                <img src="./assets/images/hz.jpg" class="rounded-circle me-3">
                <div class="profile-details">
                  <div class="profile-name">AR Shakir</div>
                  <div class="profile-description">Sr.Visual Designer</div>
                </div>
            </div>
            <div class="sidebar-header">Menu</div>
              <ul class="nav flex-column" id="sidebar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                      <i class="bi bi-archive"></i>My Tasks
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <i class="bi bi-chat-left-text"></i>Inbox</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="bi bi-compass"></i>Projects
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-clock"></i>Standups</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                      <i class="bi bi-calendar2"></i>Meetings
                      <div class="count-badge">5</div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="bi bi-sliders"></i>Settings</a>
                </li>    
              </ul>
            <br>
            <div class="logout">
                <button class="btn rounded-pill" style="background-color: #f5f5f5;">LOGOUT</button>
            </div>
            <br>
            <div class="license">
                <div class="text-secondary small">2021 AR Shakir License</div>
            </div>    
        </div>


        <div class="col-lg-7 wrapper">
            
            <div class="d-flex align-items-center py-4 flex-wrap bg-white mb-2">
                <div class="fs-5 fw-bold me-auto">
                    <button class="btn px-2 d-xl-none" onclick="showSidebar()"><i class="fa fa-bars"></i></button>
                    Hi Shakir!
                </div>
                <div class="d-flex align-items-center">
                    <div class="text-secondary small fw-bold me-3">15% task completed</div>
                    <div class="progress" style="width: 100px; height: 8px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 col-md-12 col-xl-5 mb-3">
                    <div class="custom-card card-left">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi-lightbulb"></i></div>
                            <button class="btn ms-auto text-white py-0 px-1"><i class="bi-three-dots fs-4"></i></button>
                        </div>
                        <div class="card-text">
                            R&D for New Banking Mobile App
                        </div>
                        <div class="image-list">
                            <img src="./assets/images/hz.jpg" alt="">
                            <img src="./assets/images/hz.jpg" alt="">
                            <img src="./assets/images/hz.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-xl-7 mb-3">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi-key"></i></div>
                        </div>
                        <div class="card-text">
                            Create Signup Page
                        </div>
                        <div class="image-list">
                            <img src="./assets/images/hz.jpg" alt="">
                            <img src="./assets/images/hz.jpg" alt="">
                            <img src="./assets/images/hz.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center mb-4 flex-wrap">
                <div class="fs-5 fw-bold me-auto">Monthly Tasks</div>
                <div>
                    <button class="btn rounded-pill" style="background-color: #f5f5f5;">Archive</button>
                    <button class="btn ms-2 rounded-pill bg-violet btn-dark"><i class="fa fa-plus me-2"></i>New</button>
                </div>
            </div>

            <ul class="nav mb-4" id="task-nav">
                <li class="nav-item">
                    <a class="nav-link active" role="button">Active Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="button">Completed</a>
                </li>
                <li class="nav-item ms-auto">
                    <a class="nav-link pe-0" role="button"><i class="bi-search me-2"></i> Search</a>
                </li>
            </ul>
    
            <div class="text-secondary fw-medium mb-4">Today</div>
            <div class="task">
                <div class="task-icon bg-primary"><i class="fab fa-uber fa-2x"></i></div>
                <div class="px-3">
                    <div class="fs-6 fw-medium">Uber</div>
                    <div class="small text-secondary">App desing and upgrades with new features - In Progress 16 days</div>
                </div>
                <div class="image-list ms-auto mt-2">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                </div>
            </div>
            <div class="task">
                <div class="task-icon bg-violet"><i class="fab fa-facebook-f fa-2x"></i></div>
                <div class="px-3">
                    <div class="fs-6 fw-medium">Facebook Ads</div>
                    <div class="small text-secondary">Facebook Ads Design for CreativeCloud - Last worked 5 days ago</div>
                </div>
                <div class="image-list ms-auto mt-2">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                </div>
            </div>
            <div class="task">
                <div class="task-icon bg-violet"><i class="fas fa-p fa-2x"></i></div>
                <div class="px-3">
                    <div class="fs-6 fw-medium">Payoneer</div>
                    <div class="small text-secondary">Payoneer Dashboard Design - Due in 3 days</div>
                </div>
                <div class="image-list ms-auto mt-2">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                </div>
            </div>
    
            <div class="text-secondary fw-medium mb-4 mt-5">Tomorrow</div>
            <div class="task">
                <div class="task-icon bg-primary"><i class="fab fa-uniregistry fa-2x"></i></div>
                <div class="px-3">
                    <div class="fs-6 fw-medium">Upwork</div>
                    <div class="small text-secondary">Developing - Viewed Just Now - Assigned 10 min ago</div>
                </div>
                <div class="image-list ms-auto mt-2">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                </div>
            </div>
        </div>
    
        <div class="col-lg-3 sidebar-right">
            <div class="d-flex align-items-center mb-4 flex-wrap">
                <div class="fs-5 fw-bold me-auto">Today's Schedule</div>
                <div class=" rounded-pill px-3 py-2" style="background-color: #f5f5f5;">
                    <i class="bi-border-all me-3 opacity-50"></i>
                    <i class="bi-calendar2"></i>
                </div>
            </div>
    
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <div class="text-primary small">30 minute call with client</div>
                    <div class="fw-medium fs-6">Project Discovery Call</div>
                </div>
                <button class="btn text-blue"><i class="fa fa-plus me-2"></i>Invite</button>
            </div>
    
            <div class="call-card d-flex p-3 mt-4">
                <div class="image-list">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                    <img src="./assets/images/hz.jpg" alt="">
                </div>
                <div>
                    <button class="btn text-white px-1"><i class="fa-fw fas fa-phone-slash"></i></button>
                    <div class="call-time">28:35</div>
                    <button class="btn text-white px-1"><i class="fa-fw fas fa-ellipsis-v"></i></button>
                </div>
            </div>
    
            <div class="w-100 border-bottom my-5"></div>
    
            <div class="d-flex align-items-center flex-wrap">
                <div class="fs-5 fw-bold me-auto">Design Project</div>
                <button class="btn">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
            </div>
            <div class="mb-4 text-secondary small"><i class="fas fa-fire me-2"></i>In Progress</div>
    
            <div class="d-flex justify-content-between">
                <div>
                    <div class="text-secondary small">Completed</div>
                    <div class="fs-2 fw-bold position-relative d-inline-block">114 <i class="fas fa-circle text-success position-absolute" style="font-size: 6px; top: 12px; right: -6px;"></i></div>
                </div>
                <div class="px-2">
                    <div class="text-secondary small">In Progress</div>
                    <div class="fs-2 fw-bold position-relative d-inline-block">24 <i class="fas fa-circle text-primary position-absolute" style="font-size: 6px; top: 12px; right: -6px;"></i></div>
                </div>
                <div>
                    <div class="text-secondary small">Team Members</div>
                    <div class="image-list">
                        <img src="./assets/images/hz.jpg" alt="">
                        <img src="./assets/images/hz.jpg" alt="">
                        <img src="./assets/images/hz.jpg" alt="">
                    </div>
                </div>
            </div>
    
            <div class="w-100 border-bottom my-5"></div>
    
            <div class="d-flex align-items-center flex-wrap mb-4">
                <div class="fs-5 fw-bold me-auto">Design Project</div>
                <button class="btn">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
            </div>
    
            <div class="text-secondary small fw-medium mb-2">Task Title</div>
            <input type="text" class="form-control">
            <div class="d-flex justify-content-between mt-3 ">
                <button class="btn text-primary"><i class="fa fa-chevron-left"></i></button>
                <button class="btn emoticon">😀</button>
                <button class="btn emoticon">😁</button>
                <button class="btn emoticon">😜</button>
                <button class="btn emoticon">😀</button>
                <button class="btn emoticon">🥱</button>
                <button class="btn emoticon">🥱</button>
                <button class="btn emoticon">😪</button>
                <button class="btn text-primary"><i class="fa fa-chevron-right"></i></button>
            </div>
    
            <div class="w-100 border-bottom my-4">
            </div>

            <div class="text-secondary small fw-medium mb-2">Add Collaborators</div>
            <div class="d-flex">
                <div class="collaborator violet">
                    <img src="./assets/images/hz.jpg" alt="" class="collaborator-image">
                    <div class="mx-2">Angela</div>
                    <button class="btn me-1"><i class="fa fa-times"></i></button>
                </div>
                <div class="collaborator success">
                    <img src="./assets/images/hz.jpg" alt="" class="collaborator-image">
                    <div class="mx-2">Chris</div>
                    <button class="btn me-1"><i class="fa fa-times"></i></button>
                </div>
                <div class="collaborator">
                    <button class="btn px-2"><i class="fa fa-plus"></i></button>
                </div>
                <div class="collaborator bg-primary ms-auto">
                    <button class="btn px-2 text-white"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>