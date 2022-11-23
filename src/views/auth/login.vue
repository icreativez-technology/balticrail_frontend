<template>
<section class="login-bg position-relative">
    <img src="" alt="" class="d-lg-block d-none login-top-right img-fluid">
    <img src="@/assets/images/bottom-right.png" alt="" class="d-lg-block d-none login-bottom-right img-fluid">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-6 px-0 align-items-center d-lg-flex d-none">
                <img src="@/assets/login-banner.png" alt="" class="img-fluid h-100  login-img">
                <div class="welcome-txt">
                    <h3>Welcome to</h3>
                    <h2>Award winning business
                    cloud-based software.</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="login-form">
                    <div class="text-lg-left text-center mb-3">
                        <img src="@/assets/main-logo.png" alt="" class="img-fluid">
                        <h1 class="shark-color my-3">Login</h1>
                    </div>
                    <form @submit.prevent="login">
                        <div class="form-group position-relative">
                            <label for="">Email <span class="red-sapn">*</span></label>
                            <input type="text" class="form-control w-90" v-model="form.username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                        </div>
                        <div class="form-group position-relative">
                            <label for="">Password<span class="red-sapn">*</span></label>
                            <input type="password" class="form-control w-90 pass-field enter-input" v-model="form.password" id="exampleInputPassword1" placeholder="Enter Password">
                            <i class="far fa-eye-slash enter-icon right-icon" aria-hidden="true"></i>
                        </div>
                        <div class="form-group form-check d-flex justify-content-between align-items-center w-90">
                            <!-- <div>
                                <input type="checkbox" id="stopover" name="radio-group">
                                <label for="stopover" class="bordered mb-0 jost" id="stop-over-login">Remember Me</label>
                            </div> -->
                            <div>
                                <a href="javascript:void(0)" class="forgot-pwdd">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center pb-md-0 pb-2 pl">
                            <button type="submit" class="aqua-btn mt-md-3 mt-2 w-100">Sign In</button>
                        </div>
                        <div class="form-group form-check text-center go-back pl-0 mt-3">
                            <a href="javascript:void(0)" class="aqua f-20"> <i class="fas fa-arrow-left mr-2"></i>Back To Website</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</template>
<script>
import { useToast } from "vue-toastification";
import { useRouter } from "vue-router";
import {reactive, ref} from "vue";
import axios from "axios";
export default {
    setup(){
        const toast  = useToast();
        const router = useRouter();
        const token  = reactive();
        const form   = reactive([]);

        const login  = async()=>{
            try{
              let response = await axios.post("auth/login",{
                username:form.username,
                password:form.password
              });
                if(response.data){
                   localStorage.setItem('token',response.data.token);
                    toast.success("Login Successfully", {
                        timeout: 2000
                    });

                    setTimeout(function() {
                        window.location.reload();
                    },500);

                    router.push({name:'admin.dashboard.planner'});
                     
                }  
            }catch(error){
                console.log(error)
                toast.error(error.response.data.message.username[0], {
                    timeout: 2000
              });
            }
        }
        return {login,form,token}
    }
    
}
</script>