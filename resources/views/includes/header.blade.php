<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}"><img height="100" width="100" src="images/logo.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                      <li><a href="">About</a></li>
                   </ul>
                </li>
                <li class="nav-item">
                   <a class="nav-link"  href="{{url('add_user')}}">Add User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('update_user')}}">Update User</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="">Delete User</a>
                 </li>
             </ul>
          </div>
       </nav>
    </div>
 </header>
