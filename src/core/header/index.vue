<template>
<div>
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"> <router-link :to="{name:'admin.dashboard'}" class="navbar-brand"> <img class="brand-logo img-fluid" alt="stack admin logo" src="@/assets/main-logo.png"> </router-link> </li>
                <li class="nav-item d-md-none"> <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a> </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                </ul>
                <ul class="nav navbar-nav float-right">
                    <!-- <li class="dropdown dropdown-notification nav-item two-bell-icons">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="far fa-bell color-purple-i"></i>
                            <img src="images/bell-icon.png" alt="" class="img-fluid">
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Notifications</span>
                                    <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span> 
                                </h6>
                            </li>
                            <li class="scrollable-container media-list ps-container ps-theme-dark ps-active-y" data-ps-id="75e644f2-605d-3ecc-f100-72d86e4a64d8">
                                <a href="notifications.php">
                                    <div class="media">
                                        <div class="media-left align-self-center">
                                            <i class="fas fa-bell notifications-bell"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new notification!</h6>
                                            <p class="font-small-3 l-grey-text font-weight-light">Lorem ipsum
                                                dolor sit
                                                amet, consectetuer elit.</p>
                                            <div class="notification-below-info">
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10 mins ago</time>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                </a>
                                <a href="notifications.php">
                                    <div class="media">
                                        <div class="media-left align-self-center">
                                            <i class="fas fa-bell notifications-bell"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new notification!</h6>
                                            <p class="font-small-3 l-grey-text font-weight-light">Lorem ipsum
                                                dolor sit amet, consete tur sadipscing elitr, sed diam nonumy eirmod
                                                tempor invidunt.</p>
                                            <div class="notification-below-info">
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10 mins ago</time>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <i class="fas fa-eye"></i>
                                        </div>

                                    </div>
                                </a>
                                <a href="notifications.php">
                                    <div class="media">
                                        <div class="media-left align-self-center">
                                            <i class="fas fa-bell notifications-bell"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new notification!</h6>
                                            <p class="font-small-3 l-grey-text font-weight-light">Lorem ipsum
                                                dolor sit
                                                amet, consectetuer elit.</p>
                                            <div class="notification-below-info">
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10 mins ago</time>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <i class="fas fa-eye"></i>
                                        </div>

                                    </div>
                                </a>
                                <a href="notifications.php">
                                    <div class="media">
                                        <div class="media-left align-self-center">
                                            <i class="fas fa-bell notifications-bell"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new notification!</h6>
                                            <p class="font-small-3 l-grey-text font-weight-light">Lorem ipsum
                                                dolor sit
                                                amet, consectetuer elit.</p>
                                            <div class="notification-below-info">
                                                <small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10 mins ago</time>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <i class="fas fa-eye"></i>
                                        </div>

                                    </div>
                                </a>


                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item notification text-muted text-center underline" href="notifications.php">View All Notifications</a></li>
                        </ul>
                    </li> -->


                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">
                                <img src="@/assets/images/admin-profile-img.png" alt="avatar">
                            </span>
                            <span class="user-name"><span class="user-title">Admin</span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a class="dropdown-item" href="javascript"><i class="fas fa-user-circle"></i>Profile</a> -->
                            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal" @click="logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="ft-menu greey-menu-icon color-purple-i"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
</div>
</template>
<script>
import { useToast } from "vue-toastification";
import {useRouter } from "vue-router";
import axios from "axios";
export default {
    setup() {
        const router = useRouter();
        const toast = useToast();
        const logout = async()=>{
            try{
              let response = await axios.post("auth/logout");
                if(response){
                    localStorage.removeItem("token");
                    router.push({name:'admin.auth.login'});
                    toast.success("Successfully logged out", {
                    timeout: 2000
                    });
                }  
            }catch(error){
                console.log(error)
                toast.error(error, {
                    timeout: 2000
              });
            }
        }

        return{logout}
    },
}
</script>