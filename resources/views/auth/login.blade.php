<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <style>
        



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: Poppins-Regular;
  src: url('../fonts/poppins/Poppins-Regular.ttf'); 
}

@font-face {
  font-family: Poppins-Medium;
  src: url('../fonts/poppins/Poppins-Medium.ttf'); 
}

@font-face {
  font-family: Poppins-Bold;
  src: url('../fonts/poppins/Poppins-Bold.ttf'); 
}

@font-face {
  font-family: Poppins-SemiBold;
  src: url('../fonts/poppins/Poppins-SemiBold.ttf'); 
}




/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: Poppins-Regular, sans-serif;
}

/*---------------------------------------------*/
a {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #a64bf4;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Poppins-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder { color: #adadad;}
input:-moz-placeholder { color: #adadad;}
input::-moz-placeholder { color: #adadad;}
input:-ms-input-placeholder { color: #adadad;}

textarea::-webkit-input-placeholder { color: #adadad;}
textarea:-moz-placeholder { color: #adadad;}
textarea::-moz-placeholder { color: #adadad;}
textarea:-ms-input-placeholder { color: #adadad;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}

/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: Poppins-Regular;
  font-size: 14px;
  line-height: 1.5;
  color: #666666;
}

.txt2 {
  font-family: Poppins-Regular;
  font-size: 14px;
  line-height: 1.5;
  color: #333333;
  text-transform: uppercase;
}

.bg1 {background-color: #3b5998}
.bg2 {background-color: #1da1f2}
.bg3 {background-color: #ea4335}



/*//////////////////////////////////////////////////////////////////
[ login ]*/
.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

.wrap-login100 {
  width: 500px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
}


/*------------------------------------------------------------------
[ Form ]*/

.login100-form {
  width: 100%;
}

.login100-form-title {
  display: block;
  font-family: Poppins-Bold;
  font-size: 39px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
}



/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  border-bottom: 2px solid #d9d9d9;
}

.label-input100 {
  font-family: Poppins-Regular;
  font-size: 14px;
  color: #333333;
  line-height: 1.5;
  padding-left: 7px;
}

.input100 {
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #333333;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 55px;
  background: transparent;
  padding: 0 7px 0 43px;
}


/*---------------------------------------------*/
.focus-input100 {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100::after {
  content: attr(data-symbol);
  font-family: Material-Design-Iconic-Font;
  color: #adadad;
  font-size: 22px;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: calc(100% - 20px);
  bottom: 0;
  left: 0;
  padding-left: 13px;
  padding-top: 3px;
}

.focus-input100::before {
  content: "";
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background: #7f7f7f;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}


.input100:focus + .focus-input100::before {
  width: 100%;
}

.has-val.input100 + .focus-input100::before {
  width: 100%;
}

.input100:focus + .focus-input100::after {
  color: #a64bf4;
}

.has-val.input100 + .focus-input100::after {
  color: #a64bf4;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.wrap-login100-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  overflow: hidden;
  margin: 0 auto;

  box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -moz-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -webkit-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -o-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
  -ms-box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
}

.login100-form-bgbtn {
  position: absolute;
  z-index: -1;
  width: 300%;
  height: 100%;
  background: #a64bf4;
  background: -webkit-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: -o-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: -moz-linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  background: linear-gradient(right, #00dbde, #fc00ff, #00dbde, #fc00ff);
  top: 0;
  left: -100%;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn {
  font-family: Poppins-Medium;
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
}

.wrap-login100-form-btn:hover .login100-form-bgbtn {
  left: 0;
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  bottom: calc((100% - 20px) / 2);
  -webkit-transform: translateY(50%);
  -moz-transform: translateY(50%);
  -ms-transform: translateY(50%);
  -o-transform: translateY(50%);
  transform: translateY(50%);
  right: 2px;
  pointer-events: none;

  font-family: Poppins-Regular;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f06a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #c80000;
  font-size: 16px;
  bottom: calc((100% - 20px) / 2);
  -webkit-transform: translateY(50%);
  -moz-transform: translateY(50%);
  -ms-transform: translateY(50%);
  -o-transform: translateY(50%);
  transform: translateY(50%);
  right: 8px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}


/*//////////////////////////////////////////////////////////////////
[ Social item ]*/
.login100-social-item {
  font-size: 25px;
  color: #fff;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin: 5px;
}

.login100-social-item:hover {
  color: #fff;
  background-color: #333333;
}

/*//////////////////////////////////////////////////////////////////
[ Responsive ]*/

@media (max-width: 576px) {
  .wrap-login100 {
    padding-left: 15px;
    padding-right: 15px;
  }
} 
/*[ FONT SIZE ]
///////////////////////////////////////////////////////////
*/
.fs-1 {font-size: 1px;}
.fs-2 {font-size: 2px;}
.fs-3 {font-size: 3px;}
.fs-4 {font-size: 4px;}
.fs-5 {font-size: 5px;}
.fs-6 {font-size: 6px;}
.fs-7 {font-size: 7px;}
.fs-8 {font-size: 8px;}
.fs-9 {font-size: 9px;}
.fs-10 {font-size: 10px;}
.fs-11 {font-size: 11px;}
.fs-12 {font-size: 12px;}
.fs-13 {font-size: 13px;}
.fs-14 {font-size: 14px;}
.fs-15 {font-size: 15px;}
.fs-16 {font-size: 16px;}
.fs-17 {font-size: 17px;}
.fs-18 {font-size: 18px;}
.fs-19 {font-size: 19px;}
.fs-20 {font-size: 20px;}
.fs-21 {font-size: 21px;}
.fs-22 {font-size: 22px;}
.fs-23 {font-size: 23px;}
.fs-24 {font-size: 24px;}
.fs-25 {font-size: 25px;}
.fs-26 {font-size: 26px;}
.fs-27 {font-size: 27px;}
.fs-28 {font-size: 28px;}
.fs-29 {font-size: 29px;}
.fs-30 {font-size: 30px;}
.fs-31 {font-size: 31px;}
.fs-32 {font-size: 32px;}
.fs-33 {font-size: 33px;}
.fs-34 {font-size: 34px;}
.fs-35 {font-size: 35px;}
.fs-36 {font-size: 36px;}
.fs-37 {font-size: 37px;}
.fs-38 {font-size: 38px;}
.fs-39 {font-size: 39px;}
.fs-40 {font-size: 40px;}
.fs-41 {font-size: 41px;}
.fs-42 {font-size: 42px;}
.fs-43 {font-size: 43px;}
.fs-44 {font-size: 44px;}
.fs-45 {font-size: 45px;}
.fs-46 {font-size: 46px;}
.fs-47 {font-size: 47px;}
.fs-48 {font-size: 48px;}
.fs-49 {font-size: 49px;}
.fs-50 {font-size: 50px;}
.fs-51 {font-size: 51px;}
.fs-52 {font-size: 52px;}
.fs-53 {font-size: 53px;}
.fs-54 {font-size: 54px;}
.fs-55 {font-size: 55px;}
.fs-56 {font-size: 56px;}
.fs-57 {font-size: 57px;}
.fs-58 {font-size: 58px;}
.fs-59 {font-size: 59px;}
.fs-60 {font-size: 60px;}
.fs-61 {font-size: 61px;}
.fs-62 {font-size: 62px;}
.fs-63 {font-size: 63px;}
.fs-64 {font-size: 64px;}
.fs-65 {font-size: 65px;}
.fs-66 {font-size: 66px;}
.fs-67 {font-size: 67px;}
.fs-68 {font-size: 68px;}
.fs-69 {font-size: 69px;}
.fs-70 {font-size: 70px;}
.fs-71 {font-size: 71px;}
.fs-72 {font-size: 72px;}
.fs-73 {font-size: 73px;}
.fs-74 {font-size: 74px;}
.fs-75 {font-size: 75px;}
.fs-76 {font-size: 76px;}
.fs-77 {font-size: 77px;}
.fs-78 {font-size: 78px;}
.fs-79 {font-size: 79px;}
.fs-80 {font-size: 80px;}
.fs-81 {font-size: 81px;}
.fs-82 {font-size: 82px;}
.fs-83 {font-size: 83px;}
.fs-84 {font-size: 84px;}
.fs-85 {font-size: 85px;}
.fs-86 {font-size: 86px;}
.fs-87 {font-size: 87px;}
.fs-88 {font-size: 88px;}
.fs-89 {font-size: 89px;}
.fs-90 {font-size: 90px;}
.fs-91 {font-size: 91px;}
.fs-92 {font-size: 92px;}
.fs-93 {font-size: 93px;}
.fs-94 {font-size: 94px;}
.fs-95 {font-size: 95px;}
.fs-96 {font-size: 96px;}
.fs-97 {font-size: 97px;}
.fs-98 {font-size: 98px;}
.fs-99 {font-size: 99px;}
.fs-100 {font-size: 100px;}
.fs-101 {font-size: 101px;}
.fs-102 {font-size: 102px;}
.fs-103 {font-size: 103px;}
.fs-104 {font-size: 104px;}
.fs-105 {font-size: 105px;}
.fs-106 {font-size: 106px;}
.fs-107 {font-size: 107px;}
.fs-108 {font-size: 108px;}
.fs-109 {font-size: 109px;}
.fs-110 {font-size: 110px;}
.fs-111 {font-size: 111px;}
.fs-112 {font-size: 112px;}
.fs-113 {font-size: 113px;}
.fs-114 {font-size: 114px;}
.fs-115 {font-size: 115px;}
.fs-116 {font-size: 116px;}
.fs-117 {font-size: 117px;}
.fs-118 {font-size: 118px;}
.fs-119 {font-size: 119px;}
.fs-120 {font-size: 120px;}
.fs-121 {font-size: 121px;}
.fs-122 {font-size: 122px;}
.fs-123 {font-size: 123px;}
.fs-124 {font-size: 124px;}
.fs-125 {font-size: 125px;}
.fs-126 {font-size: 126px;}
.fs-127 {font-size: 127px;}
.fs-128 {font-size: 128px;}
.fs-129 {font-size: 129px;}
.fs-130 {font-size: 130px;}
.fs-131 {font-size: 131px;}
.fs-132 {font-size: 132px;}
.fs-133 {font-size: 133px;}
.fs-134 {font-size: 134px;}
.fs-135 {font-size: 135px;}
.fs-136 {font-size: 136px;}
.fs-137 {font-size: 137px;}
.fs-138 {font-size: 138px;}
.fs-139 {font-size: 139px;}
.fs-140 {font-size: 140px;}
.fs-141 {font-size: 141px;}
.fs-142 {font-size: 142px;}
.fs-143 {font-size: 143px;}
.fs-144 {font-size: 144px;}
.fs-145 {font-size: 145px;}
.fs-146 {font-size: 146px;}
.fs-147 {font-size: 147px;}
.fs-148 {font-size: 148px;}
.fs-149 {font-size: 149px;}
.fs-150 {font-size: 150px;}
.fs-151 {font-size: 151px;}
.fs-152 {font-size: 152px;}
.fs-153 {font-size: 153px;}
.fs-154 {font-size: 154px;}
.fs-155 {font-size: 155px;}
.fs-156 {font-size: 156px;}
.fs-157 {font-size: 157px;}
.fs-158 {font-size: 158px;}
.fs-159 {font-size: 159px;}
.fs-160 {font-size: 160px;}
.fs-161 {font-size: 161px;}
.fs-162 {font-size: 162px;}
.fs-163 {font-size: 163px;}
.fs-164 {font-size: 164px;}
.fs-165 {font-size: 165px;}
.fs-166 {font-size: 166px;}
.fs-167 {font-size: 167px;}
.fs-168 {font-size: 168px;}
.fs-169 {font-size: 169px;}
.fs-170 {font-size: 170px;}
.fs-171 {font-size: 171px;}
.fs-172 {font-size: 172px;}
.fs-173 {font-size: 173px;}
.fs-174 {font-size: 174px;}
.fs-175 {font-size: 175px;}
.fs-176 {font-size: 176px;}
.fs-177 {font-size: 177px;}
.fs-178 {font-size: 178px;}
.fs-179 {font-size: 179px;}
.fs-180 {font-size: 180px;}
.fs-181 {font-size: 181px;}
.fs-182 {font-size: 182px;}
.fs-183 {font-size: 183px;}
.fs-184 {font-size: 184px;}
.fs-185 {font-size: 185px;}
.fs-186 {font-size: 186px;}
.fs-187 {font-size: 187px;}
.fs-188 {font-size: 188px;}
.fs-189 {font-size: 189px;}
.fs-190 {font-size: 190px;}
.fs-191 {font-size: 191px;}
.fs-192 {font-size: 192px;}
.fs-193 {font-size: 193px;}
.fs-194 {font-size: 194px;}
.fs-195 {font-size: 195px;}
.fs-196 {font-size: 196px;}
.fs-197 {font-size: 197px;}
.fs-198 {font-size: 198px;}
.fs-199 {font-size: 199px;}
.fs-200 {font-size: 200px;}

/*[ PADDING ]
///////////////////////////////////////////////////////////
*/
.p-t-0 {padding-top: 0px;}
.p-t-1 {padding-top: 1px;}
.p-t-2 {padding-top: 2px;}
.p-t-3 {padding-top: 3px;}
.p-t-4 {padding-top: 4px;}
.p-t-5 {padding-top: 5px;}
.p-t-6 {padding-top: 6px;}
.p-t-7 {padding-top: 7px;}
.p-t-8 {padding-top: 8px;}
.p-t-9 {padding-top: 9px;}
.p-t-10 {padding-top: 10px;}
.p-t-11 {padding-top: 11px;}
.p-t-12 {padding-top: 12px;}
.p-t-13 {padding-top: 13px;}
.p-t-14 {padding-top: 14px;}
.p-t-15 {padding-top: 15px;}
.p-t-16 {padding-top: 16px;}
.p-t-17 {padding-top: 17px;}
.p-t-18 {padding-top: 18px;}
.p-t-19 {padding-top: 19px;}
.p-t-20 {padding-top: 20px;}
.p-t-21 {padding-top: 21px;}
.p-t-22 {padding-top: 22px;}
.p-t-23 {padding-top: 23px;}
.p-t-24 {padding-top: 24px;}
.p-t-25 {padding-top: 25px;}
.p-t-26 {padding-top: 26px;}
.p-t-27 {padding-top: 27px;}
.p-t-28 {padding-top: 28px;}
.p-t-29 {padding-top: 29px;}
.p-t-30 {padding-top: 30px;}
.p-t-31 {padding-top: 31px;}
.p-t-32 {padding-top: 32px;}
.p-t-33 {padding-top: 33px;}
.p-t-34 {padding-top: 34px;}
.p-t-35 {padding-top: 35px;}
.p-t-36 {padding-top: 36px;}
.p-t-37 {padding-top: 37px;}
.p-t-38 {padding-top: 38px;}
.p-t-39 {padding-top: 39px;}
.p-t-40 {padding-top: 40px;}
.p-t-41 {padding-top: 41px;}
.p-t-42 {padding-top: 42px;}
.p-t-43 {padding-top: 43px;}
.p-t-44 {padding-top: 44px;}
.p-t-45 {padding-top: 45px;}
.p-t-46 {padding-top: 46px;}
.p-t-47 {padding-top: 47px;}
.p-t-48 {padding-top: 48px;}
.p-t-49 {padding-top: 49px;}
.p-t-50 {padding-top: 50px;}
.p-t-51 {padding-top: 51px;}
.p-t-52 {padding-top: 52px;}
.p-t-53 {padding-top: 53px;}
.p-t-54 {padding-top: 54px;}
.p-t-55 {padding-top: 55px;}
.p-t-56 {padding-top: 56px;}
.p-t-57 {padding-top: 57px;}
.p-t-58 {padding-top: 58px;}
.p-t-59 {padding-top: 59px;}
.p-t-60 {padding-top: 60px;}
.p-t-61 {padding-top: 61px;}
.p-t-62 {padding-top: 62px;}
.p-t-63 {padding-top: 63px;}
.p-t-64 {padding-top: 64px;}
.p-t-65 {padding-top: 65px;}
.p-t-66 {padding-top: 66px;}
.p-t-67 {padding-top: 67px;}
.p-t-68 {padding-top: 68px;}
.p-t-69 {padding-top: 69px;}
.p-t-70 {padding-top: 70px;}
.p-t-71 {padding-top: 71px;}
.p-t-72 {padding-top: 72px;}
.p-t-73 {padding-top: 73px;}
.p-t-74 {padding-top: 74px;}
.p-t-75 {padding-top: 75px;}
.p-t-76 {padding-top: 76px;}
.p-t-77 {padding-top: 77px;}
.p-t-78 {padding-top: 78px;}
.p-t-79 {padding-top: 79px;}
.p-t-80 {padding-top: 80px;}
.p-t-81 {padding-top: 81px;}
.p-t-82 {padding-top: 82px;}
.p-t-83 {padding-top: 83px;}
.p-t-84 {padding-top: 84px;}
.p-t-85 {padding-top: 85px;}
.p-t-86 {padding-top: 86px;}
.p-t-87 {padding-top: 87px;}
.p-t-88 {padding-top: 88px;}
.p-t-89 {padding-top: 89px;}
.p-t-90 {padding-top: 90px;}
.p-t-91 {padding-top: 91px;}
.p-t-92 {padding-top: 92px;}
.p-t-93 {padding-top: 93px;}
.p-t-94 {padding-top: 94px;}
.p-t-95 {padding-top: 95px;}
.p-t-96 {padding-top: 96px;}
.p-t-97 {padding-top: 97px;}
.p-t-98 {padding-top: 98px;}
.p-t-99 {padding-top: 99px;}
.p-t-100 {padding-top: 100px;}
.p-t-101 {padding-top: 101px;}
.p-t-102 {padding-top: 102px;}
.p-t-103 {padding-top: 103px;}
.p-t-104 {padding-top: 104px;}
.p-t-105 {padding-top: 105px;}
.p-t-106 {padding-top: 106px;}
.p-t-107 {padding-top: 107px;}
.p-t-108 {padding-top: 108px;}
.p-t-109 {padding-top: 109px;}
.p-t-110 {padding-top: 110px;}
.p-t-111 {padding-top: 111px;}
.p-t-112 {padding-top: 112px;}
.p-t-113 {padding-top: 113px;}
.p-t-114 {padding-top: 114px;}
.p-t-115 {padding-top: 115px;}
.p-t-116 {padding-top: 116px;}
.p-t-117 {padding-top: 117px;}
.p-t-118 {padding-top: 118px;}
.p-t-119 {padding-top: 119px;}
.p-t-120 {padding-top: 120px;}
.p-t-121 {padding-top: 121px;}
.p-t-122 {padding-top: 122px;}
.p-t-123 {padding-top: 123px;}
.p-t-124 {padding-top: 124px;}
.p-t-125 {padding-top: 125px;}
.p-t-126 {padding-top: 126px;}
.p-t-127 {padding-top: 127px;}
.p-t-128 {padding-top: 128px;}
.p-t-129 {padding-top: 129px;}
.p-t-130 {padding-top: 130px;}
.p-t-131 {padding-top: 131px;}
.p-t-132 {padding-top: 132px;}
.p-t-133 {padding-top: 133px;}
.p-t-134 {padding-top: 134px;}
.p-t-135 {padding-top: 135px;}
.p-t-136 {padding-top: 136px;}
.p-t-137 {padding-top: 137px;}
.p-t-138 {padding-top: 138px;}
.p-t-139 {padding-top: 139px;}
.p-t-140 {padding-top: 140px;}
.p-t-141 {padding-top: 141px;}
.p-t-142 {padding-top: 142px;}
.p-t-143 {padding-top: 143px;}
.p-t-144 {padding-top: 144px;}
.p-t-145 {padding-top: 145px;}
.p-t-146 {padding-top: 146px;}
.p-t-147 {padding-top: 147px;}
.p-t-148 {padding-top: 148px;}
.p-t-149 {padding-top: 149px;}
.p-t-150 {padding-top: 150px;}
.p-t-151 {padding-top: 151px;}
.p-t-152 {padding-top: 152px;}
.p-t-153 {padding-top: 153px;}
.p-t-154 {padding-top: 154px;}
.p-t-155 {padding-top: 155px;}
.p-t-156 {padding-top: 156px;}
.p-t-157 {padding-top: 157px;}
.p-t-158 {padding-top: 158px;}
.p-t-159 {padding-top: 159px;}
.p-t-160 {padding-top: 160px;}
.p-t-161 {padding-top: 161px;}
.p-t-162 {padding-top: 162px;}
.p-t-163 {padding-top: 163px;}
.p-t-164 {padding-top: 164px;}
.p-t-165 {padding-top: 165px;}
.p-t-166 {padding-top: 166px;}
.p-t-167 {padding-top: 167px;}
.p-t-168 {padding-top: 168px;}
.p-t-169 {padding-top: 169px;}
.p-t-170 {padding-top: 170px;}
.p-t-171 {padding-top: 171px;}
.p-t-172 {padding-top: 172px;}
.p-t-173 {padding-top: 173px;}
.p-t-174 {padding-top: 174px;}
.p-t-175 {padding-top: 175px;}
.p-t-176 {padding-top: 176px;}
.p-t-177 {padding-top: 177px;}
.p-t-178 {padding-top: 178px;}
.p-t-179 {padding-top: 179px;}
.p-t-180 {padding-top: 180px;}
.p-t-181 {padding-top: 181px;}
.p-t-182 {padding-top: 182px;}
.p-t-183 {padding-top: 183px;}
.p-t-184 {padding-top: 184px;}
.p-t-185 {padding-top: 185px;}
.p-t-186 {padding-top: 186px;}
.p-t-187 {padding-top: 187px;}
.p-t-188 {padding-top: 188px;}
.p-t-189 {padding-top: 189px;}
.p-t-190 {padding-top: 190px;}
.p-t-191 {padding-top: 191px;}
.p-t-192 {padding-top: 192px;}
.p-t-193 {padding-top: 193px;}
.p-t-194 {padding-top: 194px;}
.p-t-195 {padding-top: 195px;}
.p-t-196 {padding-top: 196px;}
.p-t-197 {padding-top: 197px;}
.p-t-198 {padding-top: 198px;}
.p-t-199 {padding-top: 199px;}
.p-t-200 {padding-top: 200px;}
.p-t-201 {padding-top: 201px;}
.p-t-202 {padding-top: 202px;}
.p-t-203 {padding-top: 203px;}
.p-t-204 {padding-top: 204px;}
.p-t-205 {padding-top: 205px;}
.p-t-206 {padding-top: 206px;}
.p-t-207 {padding-top: 207px;}
.p-t-208 {padding-top: 208px;}
.p-t-209 {padding-top: 209px;}
.p-t-210 {padding-top: 210px;}
.p-t-211 {padding-top: 211px;}
.p-t-212 {padding-top: 212px;}
.p-t-213 {padding-top: 213px;}
.p-t-214 {padding-top: 214px;}
.p-t-215 {padding-top: 215px;}
.p-t-216 {padding-top: 216px;}
.p-t-217 {padding-top: 217px;}
.p-t-218 {padding-top: 218px;}
.p-t-219 {padding-top: 219px;}
.p-t-220 {padding-top: 220px;}
.p-t-221 {padding-top: 221px;}
.p-t-222 {padding-top: 222px;}
.p-t-223 {padding-top: 223px;}
.p-t-224 {padding-top: 224px;}
.p-t-225 {padding-top: 225px;}
.p-t-226 {padding-top: 226px;}
.p-t-227 {padding-top: 227px;}
.p-t-228 {padding-top: 228px;}
.p-t-229 {padding-top: 229px;}
.p-t-230 {padding-top: 230px;}
.p-t-231 {padding-top: 231px;}
.p-t-232 {padding-top: 232px;}
.p-t-233 {padding-top: 233px;}
.p-t-234 {padding-top: 234px;}
.p-t-235 {padding-top: 235px;}
.p-t-236 {padding-top: 236px;}
.p-t-237 {padding-top: 237px;}
.p-t-238 {padding-top: 238px;}
.p-t-239 {padding-top: 239px;}
.p-t-240 {padding-top: 240px;}
.p-t-241 {padding-top: 241px;}
.p-t-242 {padding-top: 242px;}
.p-t-243 {padding-top: 243px;}
.p-t-244 {padding-top: 244px;}
.p-t-245 {padding-top: 245px;}
.p-t-246 {padding-top: 246px;}
.p-t-247 {padding-top: 247px;}
.p-t-248 {padding-top: 248px;}
.p-t-249 {padding-top: 249px;}
.p-t-250 {padding-top: 250px;}
.p-b-0 {padding-bottom: 0px;}
.p-b-1 {padding-bottom: 1px;}
.p-b-2 {padding-bottom: 2px;}
.p-b-3 {padding-bottom: 3px;}
.p-b-4 {padding-bottom: 4px;}
.p-b-5 {padding-bottom: 5px;}
.p-b-6 {padding-bottom: 6px;}
.p-b-7 {padding-bottom: 7px;}
.p-b-8 {padding-bottom: 8px;}
.p-b-9 {padding-bottom: 9px;}
.p-b-10 {padding-bottom: 10px;}
.p-b-11 {padding-bottom: 11px;}
.p-b-12 {padding-bottom: 12px;}
.p-b-13 {padding-bottom: 13px;}
.p-b-14 {padding-bottom: 14px;}
.p-b-15 {padding-bottom: 15px;}
.p-b-16 {padding-bottom: 16px;}
.p-b-17 {padding-bottom: 17px;}
.p-b-18 {padding-bottom: 18px;}
.p-b-19 {padding-bottom: 19px;}
.p-b-20 {padding-bottom: 20px;}
.p-b-21 {padding-bottom: 21px;}
.p-b-22 {padding-bottom: 22px;}
.p-b-23 {padding-bottom: 23px;}
.p-b-24 {padding-bottom: 24px;}
.p-b-25 {padding-bottom: 25px;}
.p-b-26 {padding-bottom: 26px;}
.p-b-27 {padding-bottom: 27px;}
.p-b-28 {padding-bottom: 28px;}
.p-b-29 {padding-bottom: 29px;}
.p-b-30 {padding-bottom: 30px;}
.p-b-31 {padding-bottom: 31px;}
.p-b-32 {padding-bottom: 32px;}
.p-b-33 {padding-bottom: 33px;}
.p-b-34 {padding-bottom: 34px;}
.p-b-35 {padding-bottom: 35px;}
.p-b-36 {padding-bottom: 36px;}
.p-b-37 {padding-bottom: 37px;}
.p-b-38 {padding-bottom: 38px;}
.p-b-39 {padding-bottom: 39px;}
.p-b-40 {padding-bottom: 40px;}
.p-b-41 {padding-bottom: 41px;}
.p-b-42 {padding-bottom: 42px;}
.p-b-43 {padding-bottom: 43px;}
.p-b-44 {padding-bottom: 44px;}
.p-b-45 {padding-bottom: 45px;}
.p-b-46 {padding-bottom: 46px;}
.p-b-47 {padding-bottom: 47px;}
.p-b-48 {padding-bottom: 48px;}
.p-b-49 {padding-bottom: 49px;}
.p-b-50 {padding-bottom: 50px;}
.p-b-51 {padding-bottom: 51px;}
.p-b-52 {padding-bottom: 52px;}
.p-b-53 {padding-bottom: 53px;}
.p-b-54 {padding-bottom: 54px;}
.p-b-55 {padding-bottom: 55px;}
.p-b-56 {padding-bottom: 56px;}
.p-b-57 {padding-bottom: 57px;}
.p-b-58 {padding-bottom: 58px;}
.p-b-59 {padding-bottom: 59px;}
.p-b-60 {padding-bottom: 60px;}
.p-b-61 {padding-bottom: 61px;}
.p-b-62 {padding-bottom: 62px;}
.p-b-63 {padding-bottom: 63px;}
.p-b-64 {padding-bottom: 64px;}
.p-b-65 {padding-bottom: 65px;}
.p-b-66 {padding-bottom: 66px;}
.p-b-67 {padding-bottom: 67px;}
.p-b-68 {padding-bottom: 68px;}
.p-b-69 {padding-bottom: 69px;}
.p-b-70 {padding-bottom: 70px;}
.p-b-71 {padding-bottom: 71px;}
.p-b-72 {padding-bottom: 72px;}
.p-b-73 {padding-bottom: 73px;}
.p-b-74 {padding-bottom: 74px;}
.p-b-75 {padding-bottom: 75px;}
.p-b-76 {padding-bottom: 76px;}
.p-b-77 {padding-bottom: 77px;}
.p-b-78 {padding-bottom: 78px;}
.p-b-79 {padding-bottom: 79px;}
.p-b-80 {padding-bottom: 80px;}
.p-b-81 {padding-bottom: 81px;}
.p-b-82 {padding-bottom: 82px;}
.p-b-83 {padding-bottom: 83px;}
.p-b-84 {padding-bottom: 84px;}
.p-b-85 {padding-bottom: 85px;}
.p-b-86 {padding-bottom: 86px;}
.p-b-87 {padding-bottom: 87px;}
.p-b-88 {padding-bottom: 88px;}
.p-b-89 {padding-bottom: 89px;}
.p-b-90 {padding-bottom: 90px;}
.p-b-91 {padding-bottom: 91px;}
.p-b-92 {padding-bottom: 92px;}
.p-b-93 {padding-bottom: 93px;}
.p-b-94 {padding-bottom: 94px;}
.p-b-95 {padding-bottom: 95px;}
.p-b-96 {padding-bottom: 96px;}
.p-b-97 {padding-bottom: 97px;}
.p-b-98 {padding-bottom: 98px;}
.p-b-99 {padding-bottom: 99px;}
.p-b-100 {padding-bottom: 100px;}
.p-b-101 {padding-bottom: 101px;}
.p-b-102 {padding-bottom: 102px;}
.p-b-103 {padding-bottom: 103px;}
.p-b-104 {padding-bottom: 104px;}
.p-b-105 {padding-bottom: 105px;}
.p-b-106 {padding-bottom: 106px;}
.p-b-107 {padding-bottom: 107px;}
.p-b-108 {padding-bottom: 108px;}
.p-b-109 {padding-bottom: 109px;}
.p-b-110 {padding-bottom: 110px;}
.p-b-111 {padding-bottom: 111px;}
.p-b-112 {padding-bottom: 112px;}
.p-b-113 {padding-bottom: 113px;}
.p-b-114 {padding-bottom: 114px;}
.p-b-115 {padding-bottom: 115px;}
.p-b-116 {padding-bottom: 116px;}
.p-b-117 {padding-bottom: 117px;}
.p-b-118 {padding-bottom: 118px;}
.p-b-119 {padding-bottom: 119px;}
.p-b-120 {padding-bottom: 120px;}
.p-b-121 {padding-bottom: 121px;}
.p-b-122 {padding-bottom: 122px;}
.p-b-123 {padding-bottom: 123px;}
.p-b-124 {padding-bottom: 124px;}
.p-b-125 {padding-bottom: 125px;}
.p-b-126 {padding-bottom: 126px;}
.p-b-127 {padding-bottom: 127px;}
.p-b-128 {padding-bottom: 128px;}
.p-b-129 {padding-bottom: 129px;}
.p-b-130 {padding-bottom: 130px;}
.p-b-131 {padding-bottom: 131px;}
.p-b-132 {padding-bottom: 132px;}
.p-b-133 {padding-bottom: 133px;}
.p-b-134 {padding-bottom: 134px;}
.p-b-135 {padding-bottom: 135px;}
.p-b-136 {padding-bottom: 136px;}
.p-b-137 {padding-bottom: 137px;}
.p-b-138 {padding-bottom: 138px;}
.p-b-139 {padding-bottom: 139px;}
.p-b-140 {padding-bottom: 140px;}
.p-b-141 {padding-bottom: 141px;}
.p-b-142 {padding-bottom: 142px;}
.p-b-143 {padding-bottom: 143px;}
.p-b-144 {padding-bottom: 144px;}
.p-b-145 {padding-bottom: 145px;}
.p-b-146 {padding-bottom: 146px;}
.p-b-147 {padding-bottom: 147px;}
.p-b-148 {padding-bottom: 148px;}
.p-b-149 {padding-bottom: 149px;}
.p-b-150 {padding-bottom: 150px;}
.p-b-151 {padding-bottom: 151px;}
.p-b-152 {padding-bottom: 152px;}
.p-b-153 {padding-bottom: 153px;}
.p-b-154 {padding-bottom: 154px;}
.p-b-155 {padding-bottom: 155px;}
.p-b-156 {padding-bottom: 156px;}
.p-b-157 {padding-bottom: 157px;}
.p-b-158 {padding-bottom: 158px;}
.p-b-159 {padding-bottom: 159px;}
.p-b-160 {padding-bottom: 160px;}
.p-b-161 {padding-bottom: 161px;}
.p-b-162 {padding-bottom: 162px;}
.p-b-163 {padding-bottom: 163px;}
.p-b-164 {padding-bottom: 164px;}
.p-b-165 {padding-bottom: 165px;}
.p-b-166 {padding-bottom: 166px;}
.p-b-167 {padding-bottom: 167px;}
.p-b-168 {padding-bottom: 168px;}
.p-b-169 {padding-bottom: 169px;}
.p-b-170 {padding-bottom: 170px;}
.p-b-171 {padding-bottom: 171px;}
.p-b-172 {padding-bottom: 172px;}
.p-b-173 {padding-bottom: 173px;}
.p-b-174 {padding-bottom: 174px;}
.p-b-175 {padding-bottom: 175px;}
.p-b-176 {padding-bottom: 176px;}
.p-b-177 {padding-bottom: 177px;}
.p-b-178 {padding-bottom: 178px;}
.p-b-179 {padding-bottom: 179px;}
.p-b-180 {padding-bottom: 180px;}
.p-b-181 {padding-bottom: 181px;}
.p-b-182 {padding-bottom: 182px;}
.p-b-183 {padding-bottom: 183px;}
.p-b-184 {padding-bottom: 184px;}
.p-b-185 {padding-bottom: 185px;}
.p-b-186 {padding-bottom: 186px;}
.p-b-187 {padding-bottom: 187px;}
.p-b-188 {padding-bottom: 188px;}
.p-b-189 {padding-bottom: 189px;}
.p-b-190 {padding-bottom: 190px;}
.p-b-191 {padding-bottom: 191px;}
.p-b-192 {padding-bottom: 192px;}
.p-b-193 {padding-bottom: 193px;}
.p-b-194 {padding-bottom: 194px;}
.p-b-195 {padding-bottom: 195px;}
.p-b-196 {padding-bottom: 196px;}
.p-b-197 {padding-bottom: 197px;}
.p-b-198 {padding-bottom: 198px;}
.p-b-199 {padding-bottom: 199px;}
.p-b-200 {padding-bottom: 200px;}
.p-b-201 {padding-bottom: 201px;}
.p-b-202 {padding-bottom: 202px;}
.p-b-203 {padding-bottom: 203px;}
.p-b-204 {padding-bottom: 204px;}
.p-b-205 {padding-bottom: 205px;}
.p-b-206 {padding-bottom: 206px;}
.p-b-207 {padding-bottom: 207px;}
.p-b-208 {padding-bottom: 208px;}
.p-b-209 {padding-bottom: 209px;}
.p-b-210 {padding-bottom: 210px;}
.p-b-211 {padding-bottom: 211px;}
.p-b-212 {padding-bottom: 212px;}
.p-b-213 {padding-bottom: 213px;}
.p-b-214 {padding-bottom: 214px;}
.p-b-215 {padding-bottom: 215px;}
.p-b-216 {padding-bottom: 216px;}
.p-b-217 {padding-bottom: 217px;}
.p-b-218 {padding-bottom: 218px;}
.p-b-219 {padding-bottom: 219px;}
.p-b-220 {padding-bottom: 220px;}
.p-b-221 {padding-bottom: 221px;}
.p-b-222 {padding-bottom: 222px;}
.p-b-223 {padding-bottom: 223px;}
.p-b-224 {padding-bottom: 224px;}
.p-b-225 {padding-bottom: 225px;}
.p-b-226 {padding-bottom: 226px;}
.p-b-227 {padding-bottom: 227px;}
.p-b-228 {padding-bottom: 228px;}
.p-b-229 {padding-bottom: 229px;}
.p-b-230 {padding-bottom: 230px;}
.p-b-231 {padding-bottom: 231px;}
.p-b-232 {padding-bottom: 232px;}
.p-b-233 {padding-bottom: 233px;}
.p-b-234 {padding-bottom: 234px;}
.p-b-235 {padding-bottom: 235px;}
.p-b-236 {padding-bottom: 236px;}
.p-b-237 {padding-bottom: 237px;}
.p-b-238 {padding-bottom: 238px;}
.p-b-239 {padding-bottom: 239px;}
.p-b-240 {padding-bottom: 240px;}
.p-b-241 {padding-bottom: 241px;}
.p-b-242 {padding-bottom: 242px;}
.p-b-243 {padding-bottom: 243px;}
.p-b-244 {padding-bottom: 244px;}
.p-b-245 {padding-bottom: 245px;}
.p-b-246 {padding-bottom: 246px;}
.p-b-247 {padding-bottom: 247px;}
.p-b-248 {padding-bottom: 248px;}
.p-b-249 {padding-bottom: 249px;}
.p-b-250 {padding-bottom: 250px;}
.p-l-0 {padding-left: 0px;}
.p-l-1 {padding-left: 1px;}
.p-l-2 {padding-left: 2px;}
.p-l-3 {padding-left: 3px;}
.p-l-4 {padding-left: 4px;}
.p-l-5 {padding-left: 5px;}
.p-l-6 {padding-left: 6px;}
.p-l-7 {padding-left: 7px;}
.p-l-8 {padding-left: 8px;}
.p-l-9 {padding-left: 9px;}
.p-l-10 {padding-left: 10px;}
.p-l-11 {padding-left: 11px;}
.p-l-12 {padding-left: 12px;}
.p-l-13 {padding-left: 13px;}
.p-l-14 {padding-left: 14px;}
.p-l-15 {padding-left: 15px;}
.p-l-16 {padding-left: 16px;}
.p-l-17 {padding-left: 17px;}
.p-l-18 {padding-left: 18px;}
.p-l-19 {padding-left: 19px;}
.p-l-20 {padding-left: 20px;}
.p-l-21 {padding-left: 21px;}
.p-l-22 {padding-left: 22px;}
.p-l-23 {padding-left: 23px;}
.p-l-24 {padding-left: 24px;}
.p-l-25 {padding-left: 25px;}
.p-l-26 {padding-left: 26px;}
.p-l-27 {padding-left: 27px;}
.p-l-28 {padding-left: 28px;}
.p-l-29 {padding-left: 29px;}
.p-l-30 {padding-left: 30px;}
.p-l-31 {padding-left: 31px;}
.p-l-32 {padding-left: 32px;}
.p-l-33 {padding-left: 33px;}
.p-l-34 {padding-left: 34px;}
.p-l-35 {padding-left: 35px;}
.p-l-36 {padding-left: 36px;}
.p-l-37 {padding-left: 37px;}
.p-l-38 {padding-left: 38px;}
.p-l-39 {padding-left: 39px;}
.p-l-40 {padding-left: 40px;}
.p-l-41 {padding-left: 41px;}
.p-l-42 {padding-left: 42px;}
.p-l-43 {padding-left: 43px;}
.p-l-44 {padding-left: 44px;}
.p-l-45 {padding-left: 45px;}
.p-l-46 {padding-left: 46px;}
.p-l-47 {padding-left: 47px;}
.p-l-48 {padding-left: 48px;}
.p-l-49 {padding-left: 49px;}
.p-l-50 {padding-left: 50px;}
.p-l-51 {padding-left: 51px;}
.p-l-52 {padding-left: 52px;}
.p-l-53 {padding-left: 53px;}
.p-l-54 {padding-left: 54px;}
.p-l-55 {padding-left: 55px;}
.p-l-56 {padding-left: 56px;}
.p-l-57 {padding-left: 57px;}
.p-l-58 {padding-left: 58px;}
.p-l-59 {padding-left: 59px;}
.p-l-60 {padding-left: 60px;}
.p-l-61 {padding-left: 61px;}
.p-l-62 {padding-left: 62px;}
.p-l-63 {padding-left: 63px;}
.p-l-64 {padding-left: 64px;}
.p-l-65 {padding-left: 65px;}
.p-l-66 {padding-left: 66px;}
.p-l-67 {padding-left: 67px;}
.p-l-68 {padding-left: 68px;}
.p-l-69 {padding-left: 69px;}
.p-l-70 {padding-left: 70px;}
.p-l-71 {padding-left: 71px;}
.p-l-72 {padding-left: 72px;}
.p-l-73 {padding-left: 73px;}
.p-l-74 {padding-left: 74px;}
.p-l-75 {padding-left: 75px;}
.p-l-76 {padding-left: 76px;}
.p-l-77 {padding-left: 77px;}
.p-l-78 {padding-left: 78px;}
.p-l-79 {padding-left: 79px;}
.p-l-80 {padding-left: 80px;}
.p-l-81 {padding-left: 81px;}
.p-l-82 {padding-left: 82px;}
.p-l-83 {padding-left: 83px;}
.p-l-84 {padding-left: 84px;}
.p-l-85 {padding-left: 85px;}
.p-l-86 {padding-left: 86px;}
.p-l-87 {padding-left: 87px;}
.p-l-88 {padding-left: 88px;}
.p-l-89 {padding-left: 89px;}
.p-l-90 {padding-left: 90px;}
.p-l-91 {padding-left: 91px;}
.p-l-92 {padding-left: 92px;}
.p-l-93 {padding-left: 93px;}
.p-l-94 {padding-left: 94px;}
.p-l-95 {padding-left: 95px;}
.p-l-96 {padding-left: 96px;}
.p-l-97 {padding-left: 97px;}
.p-l-98 {padding-left: 98px;}
.p-l-99 {padding-left: 99px;}
.p-l-100 {padding-left: 100px;}
.p-l-101 {padding-left: 101px;}
.p-l-102 {padding-left: 102px;}
.p-l-103 {padding-left: 103px;}
.p-l-104 {padding-left: 104px;}
.p-l-105 {padding-left: 105px;}
.p-l-106 {padding-left: 106px;}
.p-l-107 {padding-left: 107px;}
.p-l-108 {padding-left: 108px;}
.p-l-109 {padding-left: 109px;}
.p-l-110 {padding-left: 110px;}
.p-l-111 {padding-left: 111px;}
.p-l-112 {padding-left: 112px;}
.p-l-113 {padding-left: 113px;}
.p-l-114 {padding-left: 114px;}
.p-l-115 {padding-left: 115px;}
.p-l-116 {padding-left: 116px;}
.p-l-117 {padding-left: 117px;}
.p-l-118 {padding-left: 118px;}
.p-l-119 {padding-left: 119px;}
.p-l-120 {padding-left: 120px;}
.p-l-121 {padding-left: 121px;}
.p-l-122 {padding-left: 122px;}
.p-l-123 {padding-left: 123px;}
.p-l-124 {padding-left: 124px;}
.p-l-125 {padding-left: 125px;}
.p-l-126 {padding-left: 126px;}
.p-l-127 {padding-left: 127px;}
.p-l-128 {padding-left: 128px;}
.p-l-129 {padding-left: 129px;}
.p-l-130 {padding-left: 130px;}
.p-l-131 {padding-left: 131px;}
.p-l-132 {padding-left: 132px;}
.p-l-133 {padding-left: 133px;}
.p-l-134 {padding-left: 134px;}
.p-l-135 {padding-left: 135px;}
.p-l-136 {padding-left: 136px;}
.p-l-137 {padding-left: 137px;}
.p-l-138 {padding-left: 138px;}
.p-l-139 {padding-left: 139px;}
.p-l-140 {padding-left: 140px;}
.p-l-141 {padding-left: 141px;}
.p-l-142 {padding-left: 142px;}
.p-l-143 {padding-left: 143px;}
.p-l-144 {padding-left: 144px;}
.p-l-145 {padding-left: 145px;}
.p-l-146 {padding-left: 146px;}
.p-l-147 {padding-left: 147px;}
.p-l-148 {padding-left: 148px;}
.p-l-149 {padding-left: 149px;}
.p-l-150 {padding-left: 150px;}
.p-l-151 {padding-left: 151px;}
.p-l-152 {padding-left: 152px;}
.p-l-153 {padding-left: 153px;}
.p-l-154 {padding-left: 154px;}
.p-l-155 {padding-left: 155px;}
.p-l-156 {padding-left: 156px;}
.p-l-157 {padding-left: 157px;}
.p-l-158 {padding-left: 158px;}
.p-l-159 {padding-left: 159px;}
.p-l-160 {padding-left: 160px;}
.p-l-161 {padding-left: 161px;}
.p-l-162 {padding-left: 162px;}
.p-l-163 {padding-left: 163px;}
.p-l-164 {padding-left: 164px;}
.p-l-165 {padding-left: 165px;}
.p-l-166 {padding-left: 166px;}
.p-l-167 {padding-left: 167px;}
.p-l-168 {padding-left: 168px;}
.p-l-169 {padding-left: 169px;}
.p-l-170 {padding-left: 170px;}
.p-l-171 {padding-left: 171px;}
.p-l-172 {padding-left: 172px;}
.p-l-173 {padding-left: 173px;}
.p-l-174 {padding-left: 174px;}
.p-l-175 {padding-left: 175px;}
.p-l-176 {padding-left: 176px;}
.p-l-177 {padding-left: 177px;}
.p-l-178 {padding-left: 178px;}
.p-l-179 {padding-left: 179px;}
.p-l-180 {padding-left: 180px;}
.p-l-181 {padding-left: 181px;}
.p-l-182 {padding-left: 182px;}
.p-l-183 {padding-left: 183px;}
.p-l-184 {padding-left: 184px;}
.p-l-185 {padding-left: 185px;}
.p-l-186 {padding-left: 186px;}
.p-l-187 {padding-left: 187px;}
.p-l-188 {padding-left: 188px;}
.p-l-189 {padding-left: 189px;}
.p-l-190 {padding-left: 190px;}
.p-l-191 {padding-left: 191px;}
.p-l-192 {padding-left: 192px;}
.p-l-193 {padding-left: 193px;}
.p-l-194 {padding-left: 194px;}
.p-l-195 {padding-left: 195px;}
.p-l-196 {padding-left: 196px;}
.p-l-197 {padding-left: 197px;}
.p-l-198 {padding-left: 198px;}
.p-l-199 {padding-left: 199px;}
.p-l-200 {padding-left: 200px;}
.p-l-201 {padding-left: 201px;}
.p-l-202 {padding-left: 202px;}
.p-l-203 {padding-left: 203px;}
.p-l-204 {padding-left: 204px;}
.p-l-205 {padding-left: 205px;}
.p-l-206 {padding-left: 206px;}
.p-l-207 {padding-left: 207px;}
.p-l-208 {padding-left: 208px;}
.p-l-209 {padding-left: 209px;}
.p-l-210 {padding-left: 210px;}
.p-l-211 {padding-left: 211px;}
.p-l-212 {padding-left: 212px;}
.p-l-213 {padding-left: 213px;}
.p-l-214 {padding-left: 214px;}
.p-l-215 {padding-left: 215px;}
.p-l-216 {padding-left: 216px;}
.p-l-217 {padding-left: 217px;}
.p-l-218 {padding-left: 218px;}
.p-l-219 {padding-left: 219px;}
.p-l-220 {padding-left: 220px;}
.p-l-221 {padding-left: 221px;}
.p-l-222 {padding-left: 222px;}
.p-l-223 {padding-left: 223px;}
.p-l-224 {padding-left: 224px;}
.p-l-225 {padding-left: 225px;}
.p-l-226 {padding-left: 226px;}
.p-l-227 {padding-left: 227px;}
.p-l-228 {padding-left: 228px;}
.p-l-229 {padding-left: 229px;}
.p-l-230 {padding-left: 230px;}
.p-l-231 {padding-left: 231px;}
.p-l-232 {padding-left: 232px;}
.p-l-233 {padding-left: 233px;}
.p-l-234 {padding-left: 234px;}
.p-l-235 {padding-left: 235px;}
.p-l-236 {padding-left: 236px;}
.p-l-237 {padding-left: 237px;}
.p-l-238 {padding-left: 238px;}
.p-l-239 {padding-left: 239px;}
.p-l-240 {padding-left: 240px;}
.p-l-241 {padding-left: 241px;}
.p-l-242 {padding-left: 242px;}
.p-l-243 {padding-left: 243px;}
.p-l-244 {padding-left: 244px;}
.p-l-245 {padding-left: 245px;}
.p-l-246 {padding-left: 246px;}
.p-l-247 {padding-left: 247px;}
.p-l-248 {padding-left: 248px;}
.p-l-249 {padding-left: 249px;}
.p-l-250 {padding-left: 250px;}
.p-r-0 {padding-right: 0px;}
.p-r-1 {padding-right: 1px;}
.p-r-2 {padding-right: 2px;}
.p-r-3 {padding-right: 3px;}
.p-r-4 {padding-right: 4px;}
.p-r-5 {padding-right: 5px;}
.p-r-6 {padding-right: 6px;}
.p-r-7 {padding-right: 7px;}
.p-r-8 {padding-right: 8px;}
.p-r-9 {padding-right: 9px;}
.p-r-10 {padding-right: 10px;}
.p-r-11 {padding-right: 11px;}
.p-r-12 {padding-right: 12px;}
.p-r-13 {padding-right: 13px;}
.p-r-14 {padding-right: 14px;}
.p-r-15 {padding-right: 15px;}
.p-r-16 {padding-right: 16px;}
.p-r-17 {padding-right: 17px;}
.p-r-18 {padding-right: 18px;}
.p-r-19 {padding-right: 19px;}
.p-r-20 {padding-right: 20px;}
.p-r-21 {padding-right: 21px;}
.p-r-22 {padding-right: 22px;}
.p-r-23 {padding-right: 23px;}
.p-r-24 {padding-right: 24px;}
.p-r-25 {padding-right: 25px;}
.p-r-26 {padding-right: 26px;}
.p-r-27 {padding-right: 27px;}
.p-r-28 {padding-right: 28px;}
.p-r-29 {padding-right: 29px;}
.p-r-30 {padding-right: 30px;}
.p-r-31 {padding-right: 31px;}
.p-r-32 {padding-right: 32px;}
.p-r-33 {padding-right: 33px;}
.p-r-34 {padding-right: 34px;}
.p-r-35 {padding-right: 35px;}
.p-r-36 {padding-right: 36px;}
.p-r-37 {padding-right: 37px;}
.p-r-38 {padding-right: 38px;}
.p-r-39 {padding-right: 39px;}
.p-r-40 {padding-right: 40px;}
.p-r-41 {padding-right: 41px;}
.p-r-42 {padding-right: 42px;}
.p-r-43 {padding-right: 43px;}
.p-r-44 {padding-right: 44px;}
.p-r-45 {padding-right: 45px;}
.p-r-46 {padding-right: 46px;}
.p-r-47 {padding-right: 47px;}
.p-r-48 {padding-right: 48px;}
.p-r-49 {padding-right: 49px;}
.p-r-50 {padding-right: 50px;}
.p-r-51 {padding-right: 51px;}
.p-r-52 {padding-right: 52px;}
.p-r-53 {padding-right: 53px;}
.p-r-54 {padding-right: 54px;}
.p-r-55 {padding-right: 55px;}
.p-r-56 {padding-right: 56px;}
.p-r-57 {padding-right: 57px;}
.p-r-58 {padding-right: 58px;}
.p-r-59 {padding-right: 59px;}
.p-r-60 {padding-right: 60px;}
.p-r-61 {padding-right: 61px;}
.p-r-62 {padding-right: 62px;}
.p-r-63 {padding-right: 63px;}
.p-r-64 {padding-right: 64px;}
.p-r-65 {padding-right: 65px;}
.p-r-66 {padding-right: 66px;}
.p-r-67 {padding-right: 67px;}
.p-r-68 {padding-right: 68px;}
.p-r-69 {padding-right: 69px;}
.p-r-70 {padding-right: 70px;}
.p-r-71 {padding-right: 71px;}
.p-r-72 {padding-right: 72px;}
.p-r-73 {padding-right: 73px;}
.p-r-74 {padding-right: 74px;}
.p-r-75 {padding-right: 75px;}
.p-r-76 {padding-right: 76px;}
.p-r-77 {padding-right: 77px;}
.p-r-78 {padding-right: 78px;}
.p-r-79 {padding-right: 79px;}
.p-r-80 {padding-right: 80px;}
.p-r-81 {padding-right: 81px;}
.p-r-82 {padding-right: 82px;}
.p-r-83 {padding-right: 83px;}
.p-r-84 {padding-right: 84px;}
.p-r-85 {padding-right: 85px;}
.p-r-86 {padding-right: 86px;}
.p-r-87 {padding-right: 87px;}
.p-r-88 {padding-right: 88px;}
.p-r-89 {padding-right: 89px;}
.p-r-90 {padding-right: 90px;}
.p-r-91 {padding-right: 91px;}
.p-r-92 {padding-right: 92px;}
.p-r-93 {padding-right: 93px;}
.p-r-94 {padding-right: 94px;}
.p-r-95 {padding-right: 95px;}
.p-r-96 {padding-right: 96px;}
.p-r-97 {padding-right: 97px;}
.p-r-98 {padding-right: 98px;}
.p-r-99 {padding-right: 99px;}
.p-r-100 {padding-right: 100px;}
.p-r-101 {padding-right: 101px;}
.p-r-102 {padding-right: 102px;}
.p-r-103 {padding-right: 103px;}
.p-r-104 {padding-right: 104px;}
.p-r-105 {padding-right: 105px;}
.p-r-106 {padding-right: 106px;}
.p-r-107 {padding-right: 107px;}
.p-r-108 {padding-right: 108px;}
.p-r-109 {padding-right: 109px;}
.p-r-110 {padding-right: 110px;}
.p-r-111 {padding-right: 111px;}
.p-r-112 {padding-right: 112px;}
.p-r-113 {padding-right: 113px;}
.p-r-114 {padding-right: 114px;}
.p-r-115 {padding-right: 115px;}
.p-r-116 {padding-right: 116px;}
.p-r-117 {padding-right: 117px;}
.p-r-118 {padding-right: 118px;}
.p-r-119 {padding-right: 119px;}
.p-r-120 {padding-right: 120px;}
.p-r-121 {padding-right: 121px;}
.p-r-122 {padding-right: 122px;}
.p-r-123 {padding-right: 123px;}
.p-r-124 {padding-right: 124px;}
.p-r-125 {padding-right: 125px;}
.p-r-126 {padding-right: 126px;}
.p-r-127 {padding-right: 127px;}
.p-r-128 {padding-right: 128px;}
.p-r-129 {padding-right: 129px;}
.p-r-130 {padding-right: 130px;}
.p-r-131 {padding-right: 131px;}
.p-r-132 {padding-right: 132px;}
.p-r-133 {padding-right: 133px;}
.p-r-134 {padding-right: 134px;}
.p-r-135 {padding-right: 135px;}
.p-r-136 {padding-right: 136px;}
.p-r-137 {padding-right: 137px;}
.p-r-138 {padding-right: 138px;}
.p-r-139 {padding-right: 139px;}
.p-r-140 {padding-right: 140px;}
.p-r-141 {padding-right: 141px;}
.p-r-142 {padding-right: 142px;}
.p-r-143 {padding-right: 143px;}
.p-r-144 {padding-right: 144px;}
.p-r-145 {padding-right: 145px;}
.p-r-146 {padding-right: 146px;}
.p-r-147 {padding-right: 147px;}
.p-r-148 {padding-right: 148px;}
.p-r-149 {padding-right: 149px;}
.p-r-150 {padding-right: 150px;}
.p-r-151 {padding-right: 151px;}
.p-r-152 {padding-right: 152px;}
.p-r-153 {padding-right: 153px;}
.p-r-154 {padding-right: 154px;}
.p-r-155 {padding-right: 155px;}
.p-r-156 {padding-right: 156px;}
.p-r-157 {padding-right: 157px;}
.p-r-158 {padding-right: 158px;}
.p-r-159 {padding-right: 159px;}
.p-r-160 {padding-right: 160px;}
.p-r-161 {padding-right: 161px;}
.p-r-162 {padding-right: 162px;}
.p-r-163 {padding-right: 163px;}
.p-r-164 {padding-right: 164px;}
.p-r-165 {padding-right: 165px;}
.p-r-166 {padding-right: 166px;}
.p-r-167 {padding-right: 167px;}
.p-r-168 {padding-right: 168px;}
.p-r-169 {padding-right: 169px;}
.p-r-170 {padding-right: 170px;}
.p-r-171 {padding-right: 171px;}
.p-r-172 {padding-right: 172px;}
.p-r-173 {padding-right: 173px;}
.p-r-174 {padding-right: 174px;}
.p-r-175 {padding-right: 175px;}
.p-r-176 {padding-right: 176px;}
.p-r-177 {padding-right: 177px;}
.p-r-178 {padding-right: 178px;}
.p-r-179 {padding-right: 179px;}
.p-r-180 {padding-right: 180px;}
.p-r-181 {padding-right: 181px;}
.p-r-182 {padding-right: 182px;}
.p-r-183 {padding-right: 183px;}
.p-r-184 {padding-right: 184px;}
.p-r-185 {padding-right: 185px;}
.p-r-186 {padding-right: 186px;}
.p-r-187 {padding-right: 187px;}
.p-r-188 {padding-right: 188px;}
.p-r-189 {padding-right: 189px;}
.p-r-190 {padding-right: 190px;}
.p-r-191 {padding-right: 191px;}
.p-r-192 {padding-right: 192px;}
.p-r-193 {padding-right: 193px;}
.p-r-194 {padding-right: 194px;}
.p-r-195 {padding-right: 195px;}
.p-r-196 {padding-right: 196px;}
.p-r-197 {padding-right: 197px;}
.p-r-198 {padding-right: 198px;}
.p-r-199 {padding-right: 199px;}
.p-r-200 {padding-right: 200px;}
.p-r-201 {padding-right: 201px;}
.p-r-202 {padding-right: 202px;}
.p-r-203 {padding-right: 203px;}
.p-r-204 {padding-right: 204px;}
.p-r-205 {padding-right: 205px;}
.p-r-206 {padding-right: 206px;}
.p-r-207 {padding-right: 207px;}
.p-r-208 {padding-right: 208px;}
.p-r-209 {padding-right: 209px;}
.p-r-210 {padding-right: 210px;}
.p-r-211 {padding-right: 211px;}
.p-r-212 {padding-right: 212px;}
.p-r-213 {padding-right: 213px;}
.p-r-214 {padding-right: 214px;}
.p-r-215 {padding-right: 215px;}
.p-r-216 {padding-right: 216px;}
.p-r-217 {padding-right: 217px;}
.p-r-218 {padding-right: 218px;}
.p-r-219 {padding-right: 219px;}
.p-r-220 {padding-right: 220px;}
.p-r-221 {padding-right: 221px;}
.p-r-222 {padding-right: 222px;}
.p-r-223 {padding-right: 223px;}
.p-r-224 {padding-right: 224px;}
.p-r-225 {padding-right: 225px;}
.p-r-226 {padding-right: 226px;}
.p-r-227 {padding-right: 227px;}
.p-r-228 {padding-right: 228px;}
.p-r-229 {padding-right: 229px;}
.p-r-230 {padding-right: 230px;}
.p-r-231 {padding-right: 231px;}
.p-r-232 {padding-right: 232px;}
.p-r-233 {padding-right: 233px;}
.p-r-234 {padding-right: 234px;}
.p-r-235 {padding-right: 235px;}
.p-r-236 {padding-right: 236px;}
.p-r-237 {padding-right: 237px;}
.p-r-238 {padding-right: 238px;}
.p-r-239 {padding-right: 239px;}
.p-r-240 {padding-right: 240px;}
.p-r-241 {padding-right: 241px;}
.p-r-242 {padding-right: 242px;}
.p-r-243 {padding-right: 243px;}
.p-r-244 {padding-right: 244px;}
.p-r-245 {padding-right: 245px;}
.p-r-246 {padding-right: 246px;}
.p-r-247 {padding-right: 247px;}
.p-r-248 {padding-right: 248px;}
.p-r-249 {padding-right: 249px;}
.p-r-250 {padding-right: 250px;}

/*[ MARGIN ]
///////////////////////////////////////////////////////////
*/
.m-t-0 {margin-top: 0px;}
.m-t-1 {margin-top: 1px;}
.m-t-2 {margin-top: 2px;}
.m-t-3 {margin-top: 3px;}
.m-t-4 {margin-top: 4px;}
.m-t-5 {margin-top: 5px;}
.m-t-6 {margin-top: 6px;}
.m-t-7 {margin-top: 7px;}
.m-t-8 {margin-top: 8px;}
.m-t-9 {margin-top: 9px;}
.m-t-10 {margin-top: 10px;}
.m-t-11 {margin-top: 11px;}
.m-t-12 {margin-top: 12px;}
.m-t-13 {margin-top: 13px;}
.m-t-14 {margin-top: 14px;}
.m-t-15 {margin-top: 15px;}
.m-t-16 {margin-top: 16px;}
.m-t-17 {margin-top: 17px;}
.m-t-18 {margin-top: 18px;}
.m-t-19 {margin-top: 19px;}
.m-t-20 {margin-top: 20px;}
.m-t-21 {margin-top: 21px;}
.m-t-22 {margin-top: 22px;}
.m-t-23 {margin-top: 23px;}
.m-t-24 {margin-top: 24px;}
.m-t-25 {margin-top: 25px;}
.m-t-26 {margin-top: 26px;}
.m-t-27 {margin-top: 27px;}
.m-t-28 {margin-top: 28px;}
.m-t-29 {margin-top: 29px;}
.m-t-30 {margin-top: 30px;}
.m-t-31 {margin-top: 31px;}
.m-t-32 {margin-top: 32px;}
.m-t-33 {margin-top: 33px;}
.m-t-34 {margin-top: 34px;}
.m-t-35 {margin-top: 35px;}
.m-t-36 {margin-top: 36px;}
.m-t-37 {margin-top: 37px;}
.m-t-38 {margin-top: 38px;}
.m-t-39 {margin-top: 39px;}
.m-t-40 {margin-top: 40px;}
.m-t-41 {margin-top: 41px;}
.m-t-42 {margin-top: 42px;}
.m-t-43 {margin-top: 43px;}
.m-t-44 {margin-top: 44px;}
.m-t-45 {margin-top: 45px;}
.m-t-46 {margin-top: 46px;}
.m-t-47 {margin-top: 47px;}
.m-t-48 {margin-top: 48px;}
.m-t-49 {margin-top: 49px;}
.m-t-50 {margin-top: 50px;}
.m-t-51 {margin-top: 51px;}
.m-t-52 {margin-top: 52px;}
.m-t-53 {margin-top: 53px;}
.m-t-54 {margin-top: 54px;}
.m-t-55 {margin-top: 55px;}
.m-t-56 {margin-top: 56px;}
.m-t-57 {margin-top: 57px;}
.m-t-58 {margin-top: 58px;}
.m-t-59 {margin-top: 59px;}
.m-t-60 {margin-top: 60px;}
.m-t-61 {margin-top: 61px;}
.m-t-62 {margin-top: 62px;}
.m-t-63 {margin-top: 63px;}
.m-t-64 {margin-top: 64px;}
.m-t-65 {margin-top: 65px;}
.m-t-66 {margin-top: 66px;}
.m-t-67 {margin-top: 67px;}
.m-t-68 {margin-top: 68px;}
.m-t-69 {margin-top: 69px;}
.m-t-70 {margin-top: 70px;}
.m-t-71 {margin-top: 71px;}
.m-t-72 {margin-top: 72px;}
.m-t-73 {margin-top: 73px;}
.m-t-74 {margin-top: 74px;}
.m-t-75 {margin-top: 75px;}
.m-t-76 {margin-top: 76px;}
.m-t-77 {margin-top: 77px;}
.m-t-78 {margin-top: 78px;}
.m-t-79 {margin-top: 79px;}
.m-t-80 {margin-top: 80px;}
.m-t-81 {margin-top: 81px;}
.m-t-82 {margin-top: 82px;}
.m-t-83 {margin-top: 83px;}
.m-t-84 {margin-top: 84px;}
.m-t-85 {margin-top: 85px;}
.m-t-86 {margin-top: 86px;}
.m-t-87 {margin-top: 87px;}
.m-t-88 {margin-top: 88px;}
.m-t-89 {margin-top: 89px;}
.m-t-90 {margin-top: 90px;}
.m-t-91 {margin-top: 91px;}
.m-t-92 {margin-top: 92px;}
.m-t-93 {margin-top: 93px;}
.m-t-94 {margin-top: 94px;}
.m-t-95 {margin-top: 95px;}
.m-t-96 {margin-top: 96px;}
.m-t-97 {margin-top: 97px;}
.m-t-98 {margin-top: 98px;}
.m-t-99 {margin-top: 99px;}
.m-t-100 {margin-top: 100px;}
.m-t-101 {margin-top: 101px;}
.m-t-102 {margin-top: 102px;}
.m-t-103 {margin-top: 103px;}
.m-t-104 {margin-top: 104px;}
.m-t-105 {margin-top: 105px;}
.m-t-106 {margin-top: 106px;}
.m-t-107 {margin-top: 107px;}
.m-t-108 {margin-top: 108px;}
.m-t-109 {margin-top: 109px;}
.m-t-110 {margin-top: 110px;}
.m-t-111 {margin-top: 111px;}
.m-t-112 {margin-top: 112px;}
.m-t-113 {margin-top: 113px;}
.m-t-114 {margin-top: 114px;}
.m-t-115 {margin-top: 115px;}
.m-t-116 {margin-top: 116px;}
.m-t-117 {margin-top: 117px;}
.m-t-118 {margin-top: 118px;}
.m-t-119 {margin-top: 119px;}
.m-t-120 {margin-top: 120px;}
.m-t-121 {margin-top: 121px;}
.m-t-122 {margin-top: 122px;}
.m-t-123 {margin-top: 123px;}
.m-t-124 {margin-top: 124px;}
.m-t-125 {margin-top: 125px;}
.m-t-126 {margin-top: 126px;}
.m-t-127 {margin-top: 127px;}
.m-t-128 {margin-top: 128px;}
.m-t-129 {margin-top: 129px;}
.m-t-130 {margin-top: 130px;}
.m-t-131 {margin-top: 131px;}
.m-t-132 {margin-top: 132px;}
.m-t-133 {margin-top: 133px;}
.m-t-134 {margin-top: 134px;}
.m-t-135 {margin-top: 135px;}
.m-t-136 {margin-top: 136px;}
.m-t-137 {margin-top: 137px;}
.m-t-138 {margin-top: 138px;}
.m-t-139 {margin-top: 139px;}
.m-t-140 {margin-top: 140px;}
.m-t-141 {margin-top: 141px;}
.m-t-142 {margin-top: 142px;}
.m-t-143 {margin-top: 143px;}
.m-t-144 {margin-top: 144px;}
.m-t-145 {margin-top: 145px;}
.m-t-146 {margin-top: 146px;}
.m-t-147 {margin-top: 147px;}
.m-t-148 {margin-top: 148px;}
.m-t-149 {margin-top: 149px;}
.m-t-150 {margin-top: 150px;}
.m-t-151 {margin-top: 151px;}
.m-t-152 {margin-top: 152px;}
.m-t-153 {margin-top: 153px;}
.m-t-154 {margin-top: 154px;}
.m-t-155 {margin-top: 155px;}
.m-t-156 {margin-top: 156px;}
.m-t-157 {margin-top: 157px;}
.m-t-158 {margin-top: 158px;}
.m-t-159 {margin-top: 159px;}
.m-t-160 {margin-top: 160px;}
.m-t-161 {margin-top: 161px;}
.m-t-162 {margin-top: 162px;}
.m-t-163 {margin-top: 163px;}
.m-t-164 {margin-top: 164px;}
.m-t-165 {margin-top: 165px;}
.m-t-166 {margin-top: 166px;}
.m-t-167 {margin-top: 167px;}
.m-t-168 {margin-top: 168px;}
.m-t-169 {margin-top: 169px;}
.m-t-170 {margin-top: 170px;}
.m-t-171 {margin-top: 171px;}
.m-t-172 {margin-top: 172px;}
.m-t-173 {margin-top: 173px;}
.m-t-174 {margin-top: 174px;}
.m-t-175 {margin-top: 175px;}
.m-t-176 {margin-top: 176px;}
.m-t-177 {margin-top: 177px;}
.m-t-178 {margin-top: 178px;}
.m-t-179 {margin-top: 179px;}
.m-t-180 {margin-top: 180px;}
.m-t-181 {margin-top: 181px;}
.m-t-182 {margin-top: 182px;}
.m-t-183 {margin-top: 183px;}
.m-t-184 {margin-top: 184px;}
.m-t-185 {margin-top: 185px;}
.m-t-186 {margin-top: 186px;}
.m-t-187 {margin-top: 187px;}
.m-t-188 {margin-top: 188px;}
.m-t-189 {margin-top: 189px;}
.m-t-190 {margin-top: 190px;}
.m-t-191 {margin-top: 191px;}
.m-t-192 {margin-top: 192px;}
.m-t-193 {margin-top: 193px;}
.m-t-194 {margin-top: 194px;}
.m-t-195 {margin-top: 195px;}
.m-t-196 {margin-top: 196px;}
.m-t-197 {margin-top: 197px;}
.m-t-198 {margin-top: 198px;}
.m-t-199 {margin-top: 199px;}
.m-t-200 {margin-top: 200px;}
.m-t-201 {margin-top: 201px;}
.m-t-202 {margin-top: 202px;}
.m-t-203 {margin-top: 203px;}
.m-t-204 {margin-top: 204px;}
.m-t-205 {margin-top: 205px;}
.m-t-206 {margin-top: 206px;}
.m-t-207 {margin-top: 207px;}
.m-t-208 {margin-top: 208px;}
.m-t-209 {margin-top: 209px;}
.m-t-210 {margin-top: 210px;}
.m-t-211 {margin-top: 211px;}
.m-t-212 {margin-top: 212px;}
.m-t-213 {margin-top: 213px;}
.m-t-214 {margin-top: 214px;}
.m-t-215 {margin-top: 215px;}
.m-t-216 {margin-top: 216px;}
.m-t-217 {margin-top: 217px;}
.m-t-218 {margin-top: 218px;}
.m-t-219 {margin-top: 219px;}
.m-t-220 {margin-top: 220px;}
.m-t-221 {margin-top: 221px;}
.m-t-222 {margin-top: 222px;}
.m-t-223 {margin-top: 223px;}
.m-t-224 {margin-top: 224px;}
.m-t-225 {margin-top: 225px;}
.m-t-226 {margin-top: 226px;}
.m-t-227 {margin-top: 227px;}
.m-t-228 {margin-top: 228px;}
.m-t-229 {margin-top: 229px;}
.m-t-230 {margin-top: 230px;}
.m-t-231 {margin-top: 231px;}
.m-t-232 {margin-top: 232px;}
.m-t-233 {margin-top: 233px;}
.m-t-234 {margin-top: 234px;}
.m-t-235 {margin-top: 235px;}
.m-t-236 {margin-top: 236px;}
.m-t-237 {margin-top: 237px;}
.m-t-238 {margin-top: 238px;}
.m-t-239 {margin-top: 239px;}
.m-t-240 {margin-top: 240px;}
.m-t-241 {margin-top: 241px;}
.m-t-242 {margin-top: 242px;}
.m-t-243 {margin-top: 243px;}
.m-t-244 {margin-top: 244px;}
.m-t-245 {margin-top: 245px;}
.m-t-246 {margin-top: 246px;}
.m-t-247 {margin-top: 247px;}
.m-t-248 {margin-top: 248px;}
.m-t-249 {margin-top: 249px;}
.m-t-250 {margin-top: 250px;}
.m-b-0 {margin-bottom: 0px;}
.m-b-1 {margin-bottom: 1px;}
.m-b-2 {margin-bottom: 2px;}
.m-b-3 {margin-bottom: 3px;}
.m-b-4 {margin-bottom: 4px;}
.m-b-5 {margin-bottom: 5px;}
.m-b-6 {margin-bottom: 6px;}
.m-b-7 {margin-bottom: 7px;}
.m-b-8 {margin-bottom: 8px;}
.m-b-9 {margin-bottom: 9px;}
.m-b-10 {margin-bottom: 10px;}
.m-b-11 {margin-bottom: 11px;}
.m-b-12 {margin-bottom: 12px;}
.m-b-13 {margin-bottom: 13px;}
.m-b-14 {margin-bottom: 14px;}
.m-b-15 {margin-bottom: 15px;}
.m-b-16 {margin-bottom: 16px;}
.m-b-17 {margin-bottom: 17px;}
.m-b-18 {margin-bottom: 18px;}
.m-b-19 {margin-bottom: 19px;}
.m-b-20 {margin-bottom: 20px;}
.m-b-21 {margin-bottom: 21px;}
.m-b-22 {margin-bottom: 22px;}
.m-b-23 {margin-bottom: 23px;}
.m-b-24 {margin-bottom: 24px;}
.m-b-25 {margin-bottom: 25px;}
.m-b-26 {margin-bottom: 26px;}
.m-b-27 {margin-bottom: 27px;}
.m-b-28 {margin-bottom: 28px;}
.m-b-29 {margin-bottom: 29px;}
.m-b-30 {margin-bottom: 30px;}
.m-b-31 {margin-bottom: 31px;}
.m-b-32 {margin-bottom: 32px;}
.m-b-33 {margin-bottom: 33px;}
.m-b-34 {margin-bottom: 34px;}
.m-b-35 {margin-bottom: 35px;}
.m-b-36 {margin-bottom: 36px;}
.m-b-37 {margin-bottom: 37px;}
.m-b-38 {margin-bottom: 38px;}
.m-b-39 {margin-bottom: 39px;}
.m-b-40 {margin-bottom: 40px;}
.m-b-41 {margin-bottom: 41px;}
.m-b-42 {margin-bottom: 42px;}
.m-b-43 {margin-bottom: 43px;}
.m-b-44 {margin-bottom: 44px;}
.m-b-45 {margin-bottom: 45px;}
.m-b-46 {margin-bottom: 46px;}
.m-b-47 {margin-bottom: 47px;}
.m-b-48 {margin-bottom: 48px;}
.m-b-49 {margin-bottom: 49px;}
.m-b-50 {margin-bottom: 50px;}
.m-b-51 {margin-bottom: 51px;}
.m-b-52 {margin-bottom: 52px;}
.m-b-53 {margin-bottom: 53px;}
.m-b-54 {margin-bottom: 54px;}
.m-b-55 {margin-bottom: 55px;}
.m-b-56 {margin-bottom: 56px;}
.m-b-57 {margin-bottom: 57px;}
.m-b-58 {margin-bottom: 58px;}
.m-b-59 {margin-bottom: 59px;}
.m-b-60 {margin-bottom: 60px;}
.m-b-61 {margin-bottom: 61px;}
.m-b-62 {margin-bottom: 62px;}
.m-b-63 {margin-bottom: 63px;}
.m-b-64 {margin-bottom: 64px;}
.m-b-65 {margin-bottom: 65px;}
.m-b-66 {margin-bottom: 66px;}
.m-b-67 {margin-bottom: 67px;}
.m-b-68 {margin-bottom: 68px;}
.m-b-69 {margin-bottom: 69px;}
.m-b-70 {margin-bottom: 70px;}
.m-b-71 {margin-bottom: 71px;}
.m-b-72 {margin-bottom: 72px;}
.m-b-73 {margin-bottom: 73px;}
.m-b-74 {margin-bottom: 74px;}
.m-b-75 {margin-bottom: 75px;}
.m-b-76 {margin-bottom: 76px;}
.m-b-77 {margin-bottom: 77px;}
.m-b-78 {margin-bottom: 78px;}
.m-b-79 {margin-bottom: 79px;}
.m-b-80 {margin-bottom: 80px;}
.m-b-81 {margin-bottom: 81px;}
.m-b-82 {margin-bottom: 82px;}
.m-b-83 {margin-bottom: 83px;}
.m-b-84 {margin-bottom: 84px;}
.m-b-85 {margin-bottom: 85px;}
.m-b-86 {margin-bottom: 86px;}
.m-b-87 {margin-bottom: 87px;}
.m-b-88 {margin-bottom: 88px;}
.m-b-89 {margin-bottom: 89px;}
.m-b-90 {margin-bottom: 90px;}
.m-b-91 {margin-bottom: 91px;}
.m-b-92 {margin-bottom: 92px;}
.m-b-93 {margin-bottom: 93px;}
.m-b-94 {margin-bottom: 94px;}
.m-b-95 {margin-bottom: 95px;}
.m-b-96 {margin-bottom: 96px;}
.m-b-97 {margin-bottom: 97px;}
.m-b-98 {margin-bottom: 98px;}
.m-b-99 {margin-bottom: 99px;}
.m-b-100 {margin-bottom: 100px;}
.m-b-101 {margin-bottom: 101px;}
.m-b-102 {margin-bottom: 102px;}
.m-b-103 {margin-bottom: 103px;}
.m-b-104 {margin-bottom: 104px;}
.m-b-105 {margin-bottom: 105px;}
.m-b-106 {margin-bottom: 106px;}
.m-b-107 {margin-bottom: 107px;}
.m-b-108 {margin-bottom: 108px;}
.m-b-109 {margin-bottom: 109px;}
.m-b-110 {margin-bottom: 110px;}
.m-b-111 {margin-bottom: 111px;}
.m-b-112 {margin-bottom: 112px;}
.m-b-113 {margin-bottom: 113px;}
.m-b-114 {margin-bottom: 114px;}
.m-b-115 {margin-bottom: 115px;}
.m-b-116 {margin-bottom: 116px;}
.m-b-117 {margin-bottom: 117px;}
.m-b-118 {margin-bottom: 118px;}
.m-b-119 {margin-bottom: 119px;}
.m-b-120 {margin-bottom: 120px;}
.m-b-121 {margin-bottom: 121px;}
.m-b-122 {margin-bottom: 122px;}
.m-b-123 {margin-bottom: 123px;}
.m-b-124 {margin-bottom: 124px;}
.m-b-125 {margin-bottom: 125px;}
.m-b-126 {margin-bottom: 126px;}
.m-b-127 {margin-bottom: 127px;}
.m-b-128 {margin-bottom: 128px;}
.m-b-129 {margin-bottom: 129px;}
.m-b-130 {margin-bottom: 130px;}
.m-b-131 {margin-bottom: 131px;}
.m-b-132 {margin-bottom: 132px;}
.m-b-133 {margin-bottom: 133px;}
.m-b-134 {margin-bottom: 134px;}
.m-b-135 {margin-bottom: 135px;}
.m-b-136 {margin-bottom: 136px;}
.m-b-137 {margin-bottom: 137px;}
.m-b-138 {margin-bottom: 138px;}
.m-b-139 {margin-bottom: 139px;}
.m-b-140 {margin-bottom: 140px;}
.m-b-141 {margin-bottom: 141px;}
.m-b-142 {margin-bottom: 142px;}
.m-b-143 {margin-bottom: 143px;}
.m-b-144 {margin-bottom: 144px;}
.m-b-145 {margin-bottom: 145px;}
.m-b-146 {margin-bottom: 146px;}
.m-b-147 {margin-bottom: 147px;}
.m-b-148 {margin-bottom: 148px;}
.m-b-149 {margin-bottom: 149px;}
.m-b-150 {margin-bottom: 150px;}
.m-b-151 {margin-bottom: 151px;}
.m-b-152 {margin-bottom: 152px;}
.m-b-153 {margin-bottom: 153px;}
.m-b-154 {margin-bottom: 154px;}
.m-b-155 {margin-bottom: 155px;}
.m-b-156 {margin-bottom: 156px;}
.m-b-157 {margin-bottom: 157px;}
.m-b-158 {margin-bottom: 158px;}
.m-b-159 {margin-bottom: 159px;}
.m-b-160 {margin-bottom: 160px;}
.m-b-161 {margin-bottom: 161px;}
.m-b-162 {margin-bottom: 162px;}
.m-b-163 {margin-bottom: 163px;}
.m-b-164 {margin-bottom: 164px;}
.m-b-165 {margin-bottom: 165px;}
.m-b-166 {margin-bottom: 166px;}
.m-b-167 {margin-bottom: 167px;}
.m-b-168 {margin-bottom: 168px;}
.m-b-169 {margin-bottom: 169px;}
.m-b-170 {margin-bottom: 170px;}
.m-b-171 {margin-bottom: 171px;}
.m-b-172 {margin-bottom: 172px;}
.m-b-173 {margin-bottom: 173px;}
.m-b-174 {margin-bottom: 174px;}
.m-b-175 {margin-bottom: 175px;}
.m-b-176 {margin-bottom: 176px;}
.m-b-177 {margin-bottom: 177px;}
.m-b-178 {margin-bottom: 178px;}
.m-b-179 {margin-bottom: 179px;}
.m-b-180 {margin-bottom: 180px;}
.m-b-181 {margin-bottom: 181px;}
.m-b-182 {margin-bottom: 182px;}
.m-b-183 {margin-bottom: 183px;}
.m-b-184 {margin-bottom: 184px;}
.m-b-185 {margin-bottom: 185px;}
.m-b-186 {margin-bottom: 186px;}
.m-b-187 {margin-bottom: 187px;}
.m-b-188 {margin-bottom: 188px;}
.m-b-189 {margin-bottom: 189px;}
.m-b-190 {margin-bottom: 190px;}
.m-b-191 {margin-bottom: 191px;}
.m-b-192 {margin-bottom: 192px;}
.m-b-193 {margin-bottom: 193px;}
.m-b-194 {margin-bottom: 194px;}
.m-b-195 {margin-bottom: 195px;}
.m-b-196 {margin-bottom: 196px;}
.m-b-197 {margin-bottom: 197px;}
.m-b-198 {margin-bottom: 198px;}
.m-b-199 {margin-bottom: 199px;}
.m-b-200 {margin-bottom: 200px;}
.m-b-201 {margin-bottom: 201px;}
.m-b-202 {margin-bottom: 202px;}
.m-b-203 {margin-bottom: 203px;}
.m-b-204 {margin-bottom: 204px;}
.m-b-205 {margin-bottom: 205px;}
.m-b-206 {margin-bottom: 206px;}
.m-b-207 {margin-bottom: 207px;}
.m-b-208 {margin-bottom: 208px;}
.m-b-209 {margin-bottom: 209px;}
.m-b-210 {margin-bottom: 210px;}
.m-b-211 {margin-bottom: 211px;}
.m-b-212 {margin-bottom: 212px;}
.m-b-213 {margin-bottom: 213px;}
.m-b-214 {margin-bottom: 214px;}
.m-b-215 {margin-bottom: 215px;}
.m-b-216 {margin-bottom: 216px;}
.m-b-217 {margin-bottom: 217px;}
.m-b-218 {margin-bottom: 218px;}
.m-b-219 {margin-bottom: 219px;}
.m-b-220 {margin-bottom: 220px;}
.m-b-221 {margin-bottom: 221px;}
.m-b-222 {margin-bottom: 222px;}
.m-b-223 {margin-bottom: 223px;}
.m-b-224 {margin-bottom: 224px;}
.m-b-225 {margin-bottom: 225px;}
.m-b-226 {margin-bottom: 226px;}
.m-b-227 {margin-bottom: 227px;}
.m-b-228 {margin-bottom: 228px;}
.m-b-229 {margin-bottom: 229px;}
.m-b-230 {margin-bottom: 230px;}
.m-b-231 {margin-bottom: 231px;}
.m-b-232 {margin-bottom: 232px;}
.m-b-233 {margin-bottom: 233px;}
.m-b-234 {margin-bottom: 234px;}
.m-b-235 {margin-bottom: 235px;}
.m-b-236 {margin-bottom: 236px;}
.m-b-237 {margin-bottom: 237px;}
.m-b-238 {margin-bottom: 238px;}
.m-b-239 {margin-bottom: 239px;}
.m-b-240 {margin-bottom: 240px;}
.m-b-241 {margin-bottom: 241px;}
.m-b-242 {margin-bottom: 242px;}
.m-b-243 {margin-bottom: 243px;}
.m-b-244 {margin-bottom: 244px;}
.m-b-245 {margin-bottom: 245px;}
.m-b-246 {margin-bottom: 246px;}
.m-b-247 {margin-bottom: 247px;}
.m-b-248 {margin-bottom: 248px;}
.m-b-249 {margin-bottom: 249px;}
.m-b-250 {margin-bottom: 250px;}
.m-l-0 {margin-left: 0px;}
.m-l-1 {margin-left: 1px;}
.m-l-2 {margin-left: 2px;}
.m-l-3 {margin-left: 3px;}
.m-l-4 {margin-left: 4px;}
.m-l-5 {margin-left: 5px;}
.m-l-6 {margin-left: 6px;}
.m-l-7 {margin-left: 7px;}
.m-l-8 {margin-left: 8px;}
.m-l-9 {margin-left: 9px;}
.m-l-10 {margin-left: 10px;}
.m-l-11 {margin-left: 11px;}
.m-l-12 {margin-left: 12px;}
.m-l-13 {margin-left: 13px;}
.m-l-14 {margin-left: 14px;}
.m-l-15 {margin-left: 15px;}
.m-l-16 {margin-left: 16px;}
.m-l-17 {margin-left: 17px;}
.m-l-18 {margin-left: 18px;}
.m-l-19 {margin-left: 19px;}
.m-l-20 {margin-left: 20px;}
.m-l-21 {margin-left: 21px;}
.m-l-22 {margin-left: 22px;}
.m-l-23 {margin-left: 23px;}
.m-l-24 {margin-left: 24px;}
.m-l-25 {margin-left: 25px;}
.m-l-26 {margin-left: 26px;}
.m-l-27 {margin-left: 27px;}
.m-l-28 {margin-left: 28px;}
.m-l-29 {margin-left: 29px;}
.m-l-30 {margin-left: 30px;}
.m-l-31 {margin-left: 31px;}
.m-l-32 {margin-left: 32px;}
.m-l-33 {margin-left: 33px;}
.m-l-34 {margin-left: 34px;}
.m-l-35 {margin-left: 35px;}
.m-l-36 {margin-left: 36px;}
.m-l-37 {margin-left: 37px;}
.m-l-38 {margin-left: 38px;}
.m-l-39 {margin-left: 39px;}
.m-l-40 {margin-left: 40px;}
.m-l-41 {margin-left: 41px;}
.m-l-42 {margin-left: 42px;}
.m-l-43 {margin-left: 43px;}
.m-l-44 {margin-left: 44px;}
.m-l-45 {margin-left: 45px;}
.m-l-46 {margin-left: 46px;}
.m-l-47 {margin-left: 47px;}
.m-l-48 {margin-left: 48px;}
.m-l-49 {margin-left: 49px;}
.m-l-50 {margin-left: 50px;}
.m-l-51 {margin-left: 51px;}
.m-l-52 {margin-left: 52px;}
.m-l-53 {margin-left: 53px;}
.m-l-54 {margin-left: 54px;}
.m-l-55 {margin-left: 55px;}
.m-l-56 {margin-left: 56px;}
.m-l-57 {margin-left: 57px;}
.m-l-58 {margin-left: 58px;}
.m-l-59 {margin-left: 59px;}
.m-l-60 {margin-left: 60px;}
.m-l-61 {margin-left: 61px;}
.m-l-62 {margin-left: 62px;}
.m-l-63 {margin-left: 63px;}
.m-l-64 {margin-left: 64px;}
.m-l-65 {margin-left: 65px;}
.m-l-66 {margin-left: 66px;}
.m-l-67 {margin-left: 67px;}
.m-l-68 {margin-left: 68px;}
.m-l-69 {margin-left: 69px;}
.m-l-70 {margin-left: 70px;}
.m-l-71 {margin-left: 71px;}
.m-l-72 {margin-left: 72px;}
.m-l-73 {margin-left: 73px;}
.m-l-74 {margin-left: 74px;}
.m-l-75 {margin-left: 75px;}
.m-l-76 {margin-left: 76px;}
.m-l-77 {margin-left: 77px;}
.m-l-78 {margin-left: 78px;}
.m-l-79 {margin-left: 79px;}
.m-l-80 {margin-left: 80px;}
.m-l-81 {margin-left: 81px;}
.m-l-82 {margin-left: 82px;}
.m-l-83 {margin-left: 83px;}
.m-l-84 {margin-left: 84px;}
.m-l-85 {margin-left: 85px;}
.m-l-86 {margin-left: 86px;}
.m-l-87 {margin-left: 87px;}
.m-l-88 {margin-left: 88px;}
.m-l-89 {margin-left: 89px;}
.m-l-90 {margin-left: 90px;}
.m-l-91 {margin-left: 91px;}
.m-l-92 {margin-left: 92px;}
.m-l-93 {margin-left: 93px;}
.m-l-94 {margin-left: 94px;}
.m-l-95 {margin-left: 95px;}
.m-l-96 {margin-left: 96px;}
.m-l-97 {margin-left: 97px;}
.m-l-98 {margin-left: 98px;}
.m-l-99 {margin-left: 99px;}
.m-l-100 {margin-left: 100px;}
.m-l-101 {margin-left: 101px;}
.m-l-102 {margin-left: 102px;}
.m-l-103 {margin-left: 103px;}
.m-l-104 {margin-left: 104px;}
.m-l-105 {margin-left: 105px;}
.m-l-106 {margin-left: 106px;}
.m-l-107 {margin-left: 107px;}
.m-l-108 {margin-left: 108px;}
.m-l-109 {margin-left: 109px;}
.m-l-110 {margin-left: 110px;}
.m-l-111 {margin-left: 111px;}
.m-l-112 {margin-left: 112px;}
.m-l-113 {margin-left: 113px;}
.m-l-114 {margin-left: 114px;}
.m-l-115 {margin-left: 115px;}
.m-l-116 {margin-left: 116px;}
.m-l-117 {margin-left: 117px;}
.m-l-118 {margin-left: 118px;}
.m-l-119 {margin-left: 119px;}
.m-l-120 {margin-left: 120px;}
.m-l-121 {margin-left: 121px;}
.m-l-122 {margin-left: 122px;}
.m-l-123 {margin-left: 123px;}
.m-l-124 {margin-left: 124px;}
.m-l-125 {margin-left: 125px;}
.m-l-126 {margin-left: 126px;}
.m-l-127 {margin-left: 127px;}
.m-l-128 {margin-left: 128px;}
.m-l-129 {margin-left: 129px;}
.m-l-130 {margin-left: 130px;}
.m-l-131 {margin-left: 131px;}
.m-l-132 {margin-left: 132px;}
.m-l-133 {margin-left: 133px;}
.m-l-134 {margin-left: 134px;}
.m-l-135 {margin-left: 135px;}
.m-l-136 {margin-left: 136px;}
.m-l-137 {margin-left: 137px;}
.m-l-138 {margin-left: 138px;}
.m-l-139 {margin-left: 139px;}
.m-l-140 {margin-left: 140px;}
.m-l-141 {margin-left: 141px;}
.m-l-142 {margin-left: 142px;}
.m-l-143 {margin-left: 143px;}
.m-l-144 {margin-left: 144px;}
.m-l-145 {margin-left: 145px;}
.m-l-146 {margin-left: 146px;}
.m-l-147 {margin-left: 147px;}
.m-l-148 {margin-left: 148px;}
.m-l-149 {margin-left: 149px;}
.m-l-150 {margin-left: 150px;}
.m-l-151 {margin-left: 151px;}
.m-l-152 {margin-left: 152px;}
.m-l-153 {margin-left: 153px;}
.m-l-154 {margin-left: 154px;}
.m-l-155 {margin-left: 155px;}
.m-l-156 {margin-left: 156px;}
.m-l-157 {margin-left: 157px;}
.m-l-158 {margin-left: 158px;}
.m-l-159 {margin-left: 159px;}
.m-l-160 {margin-left: 160px;}
.m-l-161 {margin-left: 161px;}
.m-l-162 {margin-left: 162px;}
.m-l-163 {margin-left: 163px;}
.m-l-164 {margin-left: 164px;}
.m-l-165 {margin-left: 165px;}
.m-l-166 {margin-left: 166px;}
.m-l-167 {margin-left: 167px;}
.m-l-168 {margin-left: 168px;}
.m-l-169 {margin-left: 169px;}
.m-l-170 {margin-left: 170px;}
.m-l-171 {margin-left: 171px;}
.m-l-172 {margin-left: 172px;}
.m-l-173 {margin-left: 173px;}
.m-l-174 {margin-left: 174px;}
.m-l-175 {margin-left: 175px;}
.m-l-176 {margin-left: 176px;}
.m-l-177 {margin-left: 177px;}
.m-l-178 {margin-left: 178px;}
.m-l-179 {margin-left: 179px;}
.m-l-180 {margin-left: 180px;}
.m-l-181 {margin-left: 181px;}
.m-l-182 {margin-left: 182px;}
.m-l-183 {margin-left: 183px;}
.m-l-184 {margin-left: 184px;}
.m-l-185 {margin-left: 185px;}
.m-l-186 {margin-left: 186px;}
.m-l-187 {margin-left: 187px;}
.m-l-188 {margin-left: 188px;}
.m-l-189 {margin-left: 189px;}
.m-l-190 {margin-left: 190px;}
.m-l-191 {margin-left: 191px;}
.m-l-192 {margin-left: 192px;}
.m-l-193 {margin-left: 193px;}
.m-l-194 {margin-left: 194px;}
.m-l-195 {margin-left: 195px;}
.m-l-196 {margin-left: 196px;}
.m-l-197 {margin-left: 197px;}
.m-l-198 {margin-left: 198px;}
.m-l-199 {margin-left: 199px;}
.m-l-200 {margin-left: 200px;}
.m-l-201 {margin-left: 201px;}
.m-l-202 {margin-left: 202px;}
.m-l-203 {margin-left: 203px;}
.m-l-204 {margin-left: 204px;}
.m-l-205 {margin-left: 205px;}
.m-l-206 {margin-left: 206px;}
.m-l-207 {margin-left: 207px;}
.m-l-208 {margin-left: 208px;}
.m-l-209 {margin-left: 209px;}
.m-l-210 {margin-left: 210px;}
.m-l-211 {margin-left: 211px;}
.m-l-212 {margin-left: 212px;}
.m-l-213 {margin-left: 213px;}
.m-l-214 {margin-left: 214px;}
.m-l-215 {margin-left: 215px;}
.m-l-216 {margin-left: 216px;}
.m-l-217 {margin-left: 217px;}
.m-l-218 {margin-left: 218px;}
.m-l-219 {margin-left: 219px;}
.m-l-220 {margin-left: 220px;}
.m-l-221 {margin-left: 221px;}
.m-l-222 {margin-left: 222px;}
.m-l-223 {margin-left: 223px;}
.m-l-224 {margin-left: 224px;}
.m-l-225 {margin-left: 225px;}
.m-l-226 {margin-left: 226px;}
.m-l-227 {margin-left: 227px;}
.m-l-228 {margin-left: 228px;}
.m-l-229 {margin-left: 229px;}
.m-l-230 {margin-left: 230px;}
.m-l-231 {margin-left: 231px;}
.m-l-232 {margin-left: 232px;}
.m-l-233 {margin-left: 233px;}
.m-l-234 {margin-left: 234px;}
.m-l-235 {margin-left: 235px;}
.m-l-236 {margin-left: 236px;}
.m-l-237 {margin-left: 237px;}
.m-l-238 {margin-left: 238px;}
.m-l-239 {margin-left: 239px;}
.m-l-240 {margin-left: 240px;}
.m-l-241 {margin-left: 241px;}
.m-l-242 {margin-left: 242px;}
.m-l-243 {margin-left: 243px;}
.m-l-244 {margin-left: 244px;}
.m-l-245 {margin-left: 245px;}
.m-l-246 {margin-left: 246px;}
.m-l-247 {margin-left: 247px;}
.m-l-248 {margin-left: 248px;}
.m-l-249 {margin-left: 249px;}
.m-l-250 {margin-left: 250px;}
.m-r-0 {margin-right: 0px;}
.m-r-1 {margin-right: 1px;}
.m-r-2 {margin-right: 2px;}
.m-r-3 {margin-right: 3px;}
.m-r-4 {margin-right: 4px;}
.m-r-5 {margin-right: 5px;}
.m-r-6 {margin-right: 6px;}
.m-r-7 {margin-right: 7px;}
.m-r-8 {margin-right: 8px;}
.m-r-9 {margin-right: 9px;}
.m-r-10 {margin-right: 10px;}
.m-r-11 {margin-right: 11px;}
.m-r-12 {margin-right: 12px;}
.m-r-13 {margin-right: 13px;}
.m-r-14 {margin-right: 14px;}
.m-r-15 {margin-right: 15px;}
.m-r-16 {margin-right: 16px;}
.m-r-17 {margin-right: 17px;}
.m-r-18 {margin-right: 18px;}
.m-r-19 {margin-right: 19px;}
.m-r-20 {margin-right: 20px;}
.m-r-21 {margin-right: 21px;}
.m-r-22 {margin-right: 22px;}
.m-r-23 {margin-right: 23px;}
.m-r-24 {margin-right: 24px;}
.m-r-25 {margin-right: 25px;}
.m-r-26 {margin-right: 26px;}
.m-r-27 {margin-right: 27px;}
.m-r-28 {margin-right: 28px;}
.m-r-29 {margin-right: 29px;}
.m-r-30 {margin-right: 30px;}
.m-r-31 {margin-right: 31px;}
.m-r-32 {margin-right: 32px;}
.m-r-33 {margin-right: 33px;}
.m-r-34 {margin-right: 34px;}
.m-r-35 {margin-right: 35px;}
.m-r-36 {margin-right: 36px;}
.m-r-37 {margin-right: 37px;}
.m-r-38 {margin-right: 38px;}
.m-r-39 {margin-right: 39px;}
.m-r-40 {margin-right: 40px;}
.m-r-41 {margin-right: 41px;}
.m-r-42 {margin-right: 42px;}
.m-r-43 {margin-right: 43px;}
.m-r-44 {margin-right: 44px;}
.m-r-45 {margin-right: 45px;}
.m-r-46 {margin-right: 46px;}
.m-r-47 {margin-right: 47px;}
.m-r-48 {margin-right: 48px;}
.m-r-49 {margin-right: 49px;}
.m-r-50 {margin-right: 50px;}
.m-r-51 {margin-right: 51px;}
.m-r-52 {margin-right: 52px;}
.m-r-53 {margin-right: 53px;}
.m-r-54 {margin-right: 54px;}
.m-r-55 {margin-right: 55px;}
.m-r-56 {margin-right: 56px;}
.m-r-57 {margin-right: 57px;}
.m-r-58 {margin-right: 58px;}
.m-r-59 {margin-right: 59px;}
.m-r-60 {margin-right: 60px;}
.m-r-61 {margin-right: 61px;}
.m-r-62 {margin-right: 62px;}
.m-r-63 {margin-right: 63px;}
.m-r-64 {margin-right: 64px;}
.m-r-65 {margin-right: 65px;}
.m-r-66 {margin-right: 66px;}
.m-r-67 {margin-right: 67px;}
.m-r-68 {margin-right: 68px;}
.m-r-69 {margin-right: 69px;}
.m-r-70 {margin-right: 70px;}
.m-r-71 {margin-right: 71px;}
.m-r-72 {margin-right: 72px;}
.m-r-73 {margin-right: 73px;}
.m-r-74 {margin-right: 74px;}
.m-r-75 {margin-right: 75px;}
.m-r-76 {margin-right: 76px;}
.m-r-77 {margin-right: 77px;}
.m-r-78 {margin-right: 78px;}
.m-r-79 {margin-right: 79px;}
.m-r-80 {margin-right: 80px;}
.m-r-81 {margin-right: 81px;}
.m-r-82 {margin-right: 82px;}
.m-r-83 {margin-right: 83px;}
.m-r-84 {margin-right: 84px;}
.m-r-85 {margin-right: 85px;}
.m-r-86 {margin-right: 86px;}
.m-r-87 {margin-right: 87px;}
.m-r-88 {margin-right: 88px;}
.m-r-89 {margin-right: 89px;}
.m-r-90 {margin-right: 90px;}
.m-r-91 {margin-right: 91px;}
.m-r-92 {margin-right: 92px;}
.m-r-93 {margin-right: 93px;}
.m-r-94 {margin-right: 94px;}
.m-r-95 {margin-right: 95px;}
.m-r-96 {margin-right: 96px;}
.m-r-97 {margin-right: 97px;}
.m-r-98 {margin-right: 98px;}
.m-r-99 {margin-right: 99px;}
.m-r-100 {margin-right: 100px;}
.m-r-101 {margin-right: 101px;}
.m-r-102 {margin-right: 102px;}
.m-r-103 {margin-right: 103px;}
.m-r-104 {margin-right: 104px;}
.m-r-105 {margin-right: 105px;}
.m-r-106 {margin-right: 106px;}
.m-r-107 {margin-right: 107px;}
.m-r-108 {margin-right: 108px;}
.m-r-109 {margin-right: 109px;}
.m-r-110 {margin-right: 110px;}
.m-r-111 {margin-right: 111px;}
.m-r-112 {margin-right: 112px;}
.m-r-113 {margin-right: 113px;}
.m-r-114 {margin-right: 114px;}
.m-r-115 {margin-right: 115px;}
.m-r-116 {margin-right: 116px;}
.m-r-117 {margin-right: 117px;}
.m-r-118 {margin-right: 118px;}
.m-r-119 {margin-right: 119px;}
.m-r-120 {margin-right: 120px;}
.m-r-121 {margin-right: 121px;}
.m-r-122 {margin-right: 122px;}
.m-r-123 {margin-right: 123px;}
.m-r-124 {margin-right: 124px;}
.m-r-125 {margin-right: 125px;}
.m-r-126 {margin-right: 126px;}
.m-r-127 {margin-right: 127px;}
.m-r-128 {margin-right: 128px;}
.m-r-129 {margin-right: 129px;}
.m-r-130 {margin-right: 130px;}
.m-r-131 {margin-right: 131px;}
.m-r-132 {margin-right: 132px;}
.m-r-133 {margin-right: 133px;}
.m-r-134 {margin-right: 134px;}
.m-r-135 {margin-right: 135px;}
.m-r-136 {margin-right: 136px;}
.m-r-137 {margin-right: 137px;}
.m-r-138 {margin-right: 138px;}
.m-r-139 {margin-right: 139px;}
.m-r-140 {margin-right: 140px;}
.m-r-141 {margin-right: 141px;}
.m-r-142 {margin-right: 142px;}
.m-r-143 {margin-right: 143px;}
.m-r-144 {margin-right: 144px;}
.m-r-145 {margin-right: 145px;}
.m-r-146 {margin-right: 146px;}
.m-r-147 {margin-right: 147px;}
.m-r-148 {margin-right: 148px;}
.m-r-149 {margin-right: 149px;}
.m-r-150 {margin-right: 150px;}
.m-r-151 {margin-right: 151px;}
.m-r-152 {margin-right: 152px;}
.m-r-153 {margin-right: 153px;}
.m-r-154 {margin-right: 154px;}
.m-r-155 {margin-right: 155px;}
.m-r-156 {margin-right: 156px;}
.m-r-157 {margin-right: 157px;}
.m-r-158 {margin-right: 158px;}
.m-r-159 {margin-right: 159px;}
.m-r-160 {margin-right: 160px;}
.m-r-161 {margin-right: 161px;}
.m-r-162 {margin-right: 162px;}
.m-r-163 {margin-right: 163px;}
.m-r-164 {margin-right: 164px;}
.m-r-165 {margin-right: 165px;}
.m-r-166 {margin-right: 166px;}
.m-r-167 {margin-right: 167px;}
.m-r-168 {margin-right: 168px;}
.m-r-169 {margin-right: 169px;}
.m-r-170 {margin-right: 170px;}
.m-r-171 {margin-right: 171px;}
.m-r-172 {margin-right: 172px;}
.m-r-173 {margin-right: 173px;}
.m-r-174 {margin-right: 174px;}
.m-r-175 {margin-right: 175px;}
.m-r-176 {margin-right: 176px;}
.m-r-177 {margin-right: 177px;}
.m-r-178 {margin-right: 178px;}
.m-r-179 {margin-right: 179px;}
.m-r-180 {margin-right: 180px;}
.m-r-181 {margin-right: 181px;}
.m-r-182 {margin-right: 182px;}
.m-r-183 {margin-right: 183px;}
.m-r-184 {margin-right: 184px;}
.m-r-185 {margin-right: 185px;}
.m-r-186 {margin-right: 186px;}
.m-r-187 {margin-right: 187px;}
.m-r-188 {margin-right: 188px;}
.m-r-189 {margin-right: 189px;}
.m-r-190 {margin-right: 190px;}
.m-r-191 {margin-right: 191px;}
.m-r-192 {margin-right: 192px;}
.m-r-193 {margin-right: 193px;}
.m-r-194 {margin-right: 194px;}
.m-r-195 {margin-right: 195px;}
.m-r-196 {margin-right: 196px;}
.m-r-197 {margin-right: 197px;}
.m-r-198 {margin-right: 198px;}
.m-r-199 {margin-right: 199px;}
.m-r-200 {margin-right: 200px;}
.m-r-201 {margin-right: 201px;}
.m-r-202 {margin-right: 202px;}
.m-r-203 {margin-right: 203px;}
.m-r-204 {margin-right: 204px;}
.m-r-205 {margin-right: 205px;}
.m-r-206 {margin-right: 206px;}
.m-r-207 {margin-right: 207px;}
.m-r-208 {margin-right: 208px;}
.m-r-209 {margin-right: 209px;}
.m-r-210 {margin-right: 210px;}
.m-r-211 {margin-right: 211px;}
.m-r-212 {margin-right: 212px;}
.m-r-213 {margin-right: 213px;}
.m-r-214 {margin-right: 214px;}
.m-r-215 {margin-right: 215px;}
.m-r-216 {margin-right: 216px;}
.m-r-217 {margin-right: 217px;}
.m-r-218 {margin-right: 218px;}
.m-r-219 {margin-right: 219px;}
.m-r-220 {margin-right: 220px;}
.m-r-221 {margin-right: 221px;}
.m-r-222 {margin-right: 222px;}
.m-r-223 {margin-right: 223px;}
.m-r-224 {margin-right: 224px;}
.m-r-225 {margin-right: 225px;}
.m-r-226 {margin-right: 226px;}
.m-r-227 {margin-right: 227px;}
.m-r-228 {margin-right: 228px;}
.m-r-229 {margin-right: 229px;}
.m-r-230 {margin-right: 230px;}
.m-r-231 {margin-right: 231px;}
.m-r-232 {margin-right: 232px;}
.m-r-233 {margin-right: 233px;}
.m-r-234 {margin-right: 234px;}
.m-r-235 {margin-right: 235px;}
.m-r-236 {margin-right: 236px;}
.m-r-237 {margin-right: 237px;}
.m-r-238 {margin-right: 238px;}
.m-r-239 {margin-right: 239px;}
.m-r-240 {margin-right: 240px;}
.m-r-241 {margin-right: 241px;}
.m-r-242 {margin-right: 242px;}
.m-r-243 {margin-right: 243px;}
.m-r-244 {margin-right: 244px;}
.m-r-245 {margin-right: 245px;}
.m-r-246 {margin-right: 246px;}
.m-r-247 {margin-right: 247px;}
.m-r-248 {margin-right: 248px;}
.m-r-249 {margin-right: 249px;}
.m-r-250 {margin-right: 250px;}
.m-l-r-auto {margin-left: auto;	margin-right: auto;}
.m-l-auto {margin-left: auto;}
.m-r-auto {margin-right: auto;}



/*[ TEXT ]
///////////////////////////////////////////////////////////
*/
/* ------------------------------------ */
.text-white {color: white;}
.text-black {color: black;}

.text-hov-white:hover {color: white;}

/* ------------------------------------ */
.text-up {text-transform: uppercase;}

/* ------------------------------------ */
.text-center {text-align: center;}
.text-left {text-align: left;}
.text-right {text-align: right;}
.text-middle {vertical-align: middle;}

/* ------------------------------------ */
.lh-1-0 {line-height: 1.0;}
.lh-1-1 {line-height: 1.1;}
.lh-1-2 {line-height: 1.2;}
.lh-1-3 {line-height: 1.3;}
.lh-1-4 {line-height: 1.4;}
.lh-1-5 {line-height: 1.5;}
.lh-1-6 {line-height: 1.6;}
.lh-1-7 {line-height: 1.7;}
.lh-1-8 {line-height: 1.8;}
.lh-1-9 {line-height: 1.9;}
.lh-2-0 {line-height: 2.0;}
.lh-2-1 {line-height: 2.1;}
.lh-2-2 {line-height: 2.2;}
.lh-2-3 {line-height: 2.3;}
.lh-2-4 {line-height: 2.4;}
.lh-2-5 {line-height: 2.5;}
.lh-2-6 {line-height: 2.6;}
.lh-2-7 {line-height: 2.7;}
.lh-2-8 {line-height: 2.8;}
.lh-2-9 {line-height: 2.9;}





/*[ SHAPE ]
///////////////////////////////////////////////////////////
*/

/*[ Display ]
-----------------------------------------------------------
*/
.dis-none {display: none;}
.dis-block {display: block;}
.dis-inline {display: inline;}
.dis-inline-block {display: inline-block;}
.dis-flex {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
}

/*[ Position ]
-----------------------------------------------------------
*/
.pos-relative {position: relative;}
.pos-absolute {position: absolute;}
.pos-fixed {position: fixed;}

/*[ float ]
-----------------------------------------------------------
*/
.float-l {float: left;}
.float-r {float: right;}


/*[ Width & Height ]
-----------------------------------------------------------
*/
.sizefull {
	width: 100%;
	height: 100%;
}
.w-full {width: 100%;}
.h-full {height: 100%;}
.max-w-full {max-width: 100%;}
.max-h-full {max-height: 100%;}
.min-w-full {min-width: 100%;}
.min-h-full {min-height: 100%;}

/*[ Top Bottom Left Right ]
-----------------------------------------------------------
*/
.top-0 {top: 0;}
.bottom-0 {bottom: 0;}
.left-0 {left: 0;}
.right-0 {right: 0;}

.top-auto {top: auto;}
.bottom-auto {bottom: auto;}
.left-auto {left: auto;}
.right-auto {right: auto;}


/*[ Opacity ]
-----------------------------------------------------------
*/
.op-0-0 {opacity: 0;}
.op-0-1 {opacity: 0.1;}
.op-0-2 {opacity: 0.2;}
.op-0-3 {opacity: 0.3;}
.op-0-4 {opacity: 0.4;}
.op-0-5 {opacity: 0.5;}
.op-0-6 {opacity: 0.6;}
.op-0-7 {opacity: 0.7;}
.op-0-8 {opacity: 0.8;}
.op-0-9 {opacity: 0.9;}
.op-1-0 {opacity: 1;}

/*[ Background ]
-----------------------------------------------------------
*/
.bgwhite {background-color: white;}
.bgblack {background-color: black;}



/*[ Wrap Picture ]
-----------------------------------------------------------
*/
.wrap-pic-w img {width: 100%;}
.wrap-pic-max-w img {max-width: 100%;}

/* ------------------------------------ */
.wrap-pic-h img {height: 100%;}
.wrap-pic-max-h img {max-height: 100%;}

/* ------------------------------------ */
.wrap-pic-cir {
	border-radius: 50%;
	overflow: hidden;
}
.wrap-pic-cir img {
	width: 100%;
}



/*[ Hover ]
-----------------------------------------------------------
*/
.hov-pointer:hover {cursor: pointer;}

/* ------------------------------------ */
.hov-img-zoom {
	display: block;
	overflow: hidden;
}
.hov-img-zoom img{
	width: 100%;
	-webkit-transition: all 0.6s;
    -o-transition: all 0.6s;
    -moz-transition: all 0.6s;
    transition: all 0.6s;
}
.hov-img-zoom:hover img {
	-webkit-transform: scale(1.1);
  	-moz-transform: scale(1.1);
  	-ms-transform: scale(1.1);
  	-o-transform: scale(1.1);
	transform: scale(1.1);
}



/*[  ]
-----------------------------------------------------------
*/
.bo-cir {border-radius: 50%;}

.of-hidden {overflow: hidden;}

.visible-false {visibility: hidden;}
.visible-true {visibility: visible;}




/*[ Transition ]
-----------------------------------------------------------
*/
.trans-0-1 {
	-webkit-transition: all 0.1s;
    -o-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
}
.trans-0-2 {
	-webkit-transition: all 0.2s;
    -o-transition: all 0.2s;
    -moz-transition: all 0.2s;
    transition: all 0.2s;
}
.trans-0-3 {
	-webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}
.trans-0-4 {
	-webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}
.trans-0-5 {
	-webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
}
.trans-0-6 {
	-webkit-transition: all 0.6s;
    -o-transition: all 0.6s;
    -moz-transition: all 0.6s;
    transition: all 0.6s;
}
.trans-0-9 {
	-webkit-transition: all 0.9s;
    -o-transition: all 0.9s;
    -moz-transition: all 0.9s;
    transition: all 0.9s;
}
.trans-1-0 {
	-webkit-transition: all 1s;
    -o-transition: all 1s;
    -moz-transition: all 1s;
    transition: all 1s;
}



/*[ Layout ]
///////////////////////////////////////////////////////////
*/

/*[ Flex ]
-----------------------------------------------------------
*/
/* ------------------------------------ */
.flex-w {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-wrap: wrap;
	-moz-flex-wrap: wrap;
	-ms-flex-wrap: wrap;
	-o-flex-wrap: wrap;
	flex-wrap: wrap;
}

/* ------------------------------------ */
.flex-l {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: flex-start;
}

.flex-r {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: flex-end;
}

.flex-c {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: center;
}

.flex-sa {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: space-around;
}

.flex-sb {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: space-between;
}

/* ------------------------------------ */
.flex-t {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-ms-align-items: flex-start;
	align-items: flex-start;
}

.flex-b {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-ms-align-items: flex-end;
	align-items: flex-end;
}

.flex-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-ms-align-items: center;
	align-items: center;
}

.flex-str {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-ms-align-items: stretch;
	align-items: stretch;
}

/* ------------------------------------ */
.flex-row {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: row;
	-moz-flex-direction: row;
	-ms-flex-direction: row;
	-o-flex-direction: row;
	flex-direction: row;
}

.flex-row-rev {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: row-reverse;
	-moz-flex-direction: row-reverse;
	-ms-flex-direction: row-reverse;
	-o-flex-direction: row-reverse;
	flex-direction: row-reverse;
}

.flex-col {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
}

.flex-col-rev {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column-reverse;
	-moz-flex-direction: column-reverse;
	-ms-flex-direction: column-reverse;
	-o-flex-direction: column-reverse;
	flex-direction: column-reverse;
}

/* ------------------------------------ */
.flex-c-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: center;
	-ms-align-items: center;
	align-items: center;
}

.flex-c-t {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: center;
	-ms-align-items: flex-start;
	align-items: flex-start;
}

.flex-c-b {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: center;
	-ms-align-items: flex-end;
	align-items: flex-end;
}

.flex-c-str {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: center;
	-ms-align-items: stretch;
	align-items: stretch;
}

.flex-l-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: flex-start;
	-ms-align-items: center;
	align-items: center;
}

.flex-r-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: flex-end;
	-ms-align-items: center;
	align-items: center;
}

.flex-sa-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: space-around;
	-ms-align-items: center;
	align-items: center;
}

.flex-sb-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: space-between;
	-ms-align-items: center;
	align-items: center;
}

/* ------------------------------------ */
.flex-col-l {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
	-ms-align-items: flex-start;
	align-items: flex-start;
}

.flex-col-r {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
	-ms-align-items: flex-end;
	align-items: flex-end;
}

.flex-col-c {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
	-ms-align-items: center;
	align-items: center;
}

.flex-col-l-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
	-ms-align-items: flex-start;
	align-items: flex-start;
	justify-content: center;
}

.flex-col-r-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
	-ms-align-items: flex-end;
	align-items: flex-end;
	justify-content: center;
}

.flex-col-c-m {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
	-ms-align-items: center;
	align-items: center;
	justify-content: center;
}

.flex-col-str {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
	-ms-align-items: stretch;
	align-items: stretch;
}

.flex-col-sb {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column;
	-moz-flex-direction: column;
	-ms-flex-direction: column;
	-o-flex-direction: column;
	flex-direction: column;
	justify-content: space-between;
}

/* ------------------------------------ */
.flex-col-rev-l {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column-reverse;
	-moz-flex-direction: column-reverse;
	-ms-flex-direction: column-reverse;
	-o-flex-direction: column-reverse;
	flex-direction: column-reverse;
	-ms-align-items: flex-start;
	align-items: flex-start;
}

.flex-col-rev-r {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column-reverse;
	-moz-flex-direction: column-reverse;
	-ms-flex-direction: column-reverse;
	-o-flex-direction: column-reverse;
	flex-direction: column-reverse;
	-ms-align-items: flex-end;
	align-items: flex-end;
}

.flex-col-rev-c {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column-reverse;
	-moz-flex-direction: column-reverse;
	-ms-flex-direction: column-reverse;
	-o-flex-direction: column-reverse;
	flex-direction: column-reverse;
	-ms-align-items: center;
	align-items: center;
}

.flex-col-rev-str {
	display: -webkit-box;
	display: -webkit-flex;
	display: -moz-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-flex-direction: column-reverse;
	-moz-flex-direction: column-reverse;
	-ms-flex-direction: column-reverse;
	-o-flex-direction: column-reverse;
	flex-direction: column-reverse;
	-ms-align-items: stretch;
	align-items: stretch;
}


/*[ Absolute ]
-----------------------------------------------------------
*/
.ab-c-m {
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
  	-moz-transform: translate(-50%, -50%);
  	-ms-transform: translate(-50%, -50%);
  	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}

.ab-c-t {
	position: absolute;
	top: 0px;
	left: 50%;
	-webkit-transform: translateX(-50%);
  	-moz-transform: translateX(-50%);
  	-ms-transform: translateX(-50%);
  	-o-transform: translateX(-50%);
	transform: translateX(-50%);
}

.ab-c-b {
	position: absolute;
	bottom: 0px;
	left: 50%;
	-webkit-transform: translateX(-50%);
  	-moz-transform: translateX(-50%);
  	-ms-transform: translateX(-50%);
  	-o-transform: translateX(-50%);
	transform: translateX(-50%);
}

.ab-l-m {
	position: absolute;
	left: 0px;
	top: 50%;
	-webkit-transform: translateY(-50%);
  	-moz-transform: translateY(-50%);
  	-ms-transform: translateY(-50%);
  	-o-transform: translateY(-50%);
	transform: translateY(-50%);
}

.ab-r-m {
	position: absolute;
	right: 0px;
	top: 50%;
	-webkit-transform: translateY(-50%);
  	-moz-transform: translateY(-50%);
  	-ms-transform: translateY(-50%);
  	-o-transform: translateY(-50%);
	transform: translateY(-50%);
}

.ab-t-l {
	position: absolute;
	left: 0px;
	top: 0px;
}

.ab-t-r {
	position: absolute;
	right: 0px;
	top: 0px;
}

.ab-b-l {
	position: absolute;
	left: 0px;
	bottom: 0px;
}

.ab-b-r {
	position: absolute;
	right: 0px;
	bottom: 0px;
}
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right {
  margin-left: .3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: .3em;
}
.fa.pull-right {
  margin-left: .3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-feed:before,
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-slack:before {
  content: "\f198";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: "\f19c";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-spoon:before {
  content: "\f1b1";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-automobile:before,
.fa-car:before {
  content: "\f1b9";
}
.fa-cab:before,
.fa-taxi:before {
  content: "\f1ba";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-file-pdf-o:before {
  content: "\f1c1";
}
.fa-file-word-o:before {
  content: "\f1c2";
}
.fa-file-excel-o:before {
  content: "\f1c3";
}
.fa-file-powerpoint-o:before {
  content: "\f1c4";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: "\f1c5";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: "\f1c6";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: "\f1c7";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: "\f1c8";
}
.fa-file-code-o:before {
  content: "\f1c9";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-circle-o-notch:before {
  content: "\f1ce";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: "\f1d0";
}
.fa-ge:before,
.fa-empire:before {
  content: "\f1d1";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-wechat:before,
.fa-weixin:before {
  content: "\f1d7";
}
.fa-send:before,
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: "\f1d9";
}
.fa-history:before {
  content: "\f1da";
}
.fa-circle-thin:before {
  content: "\f1db";
}
.fa-header:before {
  content: "\f1dc";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-sliders:before {
  content: "\f1de";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: "\f1e3";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-newspaper-o:before {
  content: "\f1ea";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bell-slash-o:before {
  content: "\f1f7";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-eyedropper:before {
  content: "\f1fb";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-area-chart:before {
  content: "\f1fe";
}
.fa-pie-chart:before {
  content: "\f200";
}
.fa-line-chart:before {
  content: "\f201";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bus:before {
  content: "\f207";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-cc:before {
  content: "\f20a";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: "\f20b";
}
.fa-meanpath:before {
  content: "\f20c";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-venus:before {
  content: "\f221";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-intersex:before,
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-facebook-official:before {
  content: "\f230";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-server:before {
  content: "\f233";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-hotel:before,
.fa-bed:before {
  content: "\f236";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-train:before {
  content: "\f238";
}
.fa-subway:before {
  content: "\f239";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: "\f244";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-sticky-note-o:before {
  content: "\f24a";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-hourglass-o:before {
  content: "\f250";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: "\f255";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: "\f256";
}
.fa-hand-scissors-o:before {
  content: "\f257";
}
.fa-hand-lizard-o:before {
  content: "\f258";
}
.fa-hand-spock-o:before {
  content: "\f259";
}
.fa-hand-pointer-o:before {
  content: "\f25a";
}
.fa-hand-peace-o:before {
  content: "\f25b";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-safari:before {
  content: "\f267";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-tv:before,
.fa-television:before {
  content: "\f26c";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-500px:before {
  content: "\f26e";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-calendar-plus-o:before {
  content: "\f271";
}
.fa-calendar-minus-o:before {
  content: "\f272";
}
.fa-calendar-times-o:before {
  content: "\f273";
}
.fa-calendar-check-o:before {
  content: "\f274";
}
.fa-industry:before {
  content: "\f275";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-map-o:before {
  content: "\f278";
}
.fa-map:before {
  content: "\f279";
}
.fa-commenting:before {
  content: "\f27a";
}
.fa-commenting-o:before {
  content: "\f27b";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-vimeo:before {
  content: "\f27d";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-edge:before {
  content: "\f282";
}
.fa-credit-card-alt:before {
  content: "\f283";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-modx:before {
  content: "\f285";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-usb:before {
  content: "\f287";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-pause-circle-o:before {
  content: "\f28c";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stop-circle-o:before {
  content: "\f28e";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-percent:before {
  content: "\f295";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-envira:before {
  content: "\f299";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-wheelchair-alt:before {
  content: "\f29b";
}
.fa-question-circle-o:before {
  content: "\f29c";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-volume-control-phone:before {
  content: "\f2a0";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: "\f2a4";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-signing:before,
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: "\f2b3";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: "\f2b4";
}
.fa-handshake-o:before {
  content: "\f2b5";
}
.fa-envelope-open:before {
  content: "\f2b6";
}
.fa-envelope-open-o:before {
  content: "\f2b7";
}
.fa-linode:before {
  content: "\f2b8";
}
.fa-address-book:before {
  content: "\f2b9";
}
.fa-address-book-o:before {
  content: "\f2ba";
}
.fa-vcard:before,
.fa-address-card:before {
  content: "\f2bb";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: "\f2bc";
}
.fa-user-circle:before {
  content: "\f2bd";
}
.fa-user-circle-o:before {
  content: "\f2be";
}
.fa-user-o:before {
  content: "\f2c0";
}
.fa-id-badge:before {
  content: "\f2c1";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: "\f2c2";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: "\f2c3";
}
.fa-quora:before {
  content: "\f2c4";
}
.fa-free-code-camp:before {
  content: "\f2c5";
}
.fa-telegram:before {
  content: "\f2c6";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: "\f2c7";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: "\f2c8";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: "\f2c9";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: "\f2ca";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: "\f2cb";
}
.fa-shower:before {
  content: "\f2cc";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: "\f2cd";
}
.fa-podcast:before {
  content: "\f2ce";
}
.fa-window-maximize:before {
  content: "\f2d0";
}
.fa-window-minimize:before {
  content: "\f2d1";
}
.fa-window-restore:before {
  content: "\f2d2";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: "\f2d3";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: "\f2d4";
}
.fa-bandcamp:before {
  content: "\f2d5";
}
.fa-grav:before {
  content: "\f2d6";
}
.fa-etsy:before {
  content: "\f2d7";
}
.fa-imdb:before {
  content: "\f2d8";
}
.fa-ravelry:before {
  content: "\f2d9";
}
.fa-eercast:before {
  content: "\f2da";
}
.fa-microchip:before {
  content: "\f2db";
}
.fa-snowflake-o:before {
  content: "\f2dc";
}
.fa-superpowers:before {
  content: "\f2dd";
}
.fa-wpexplorer:before {
  content: "\f2de";
}
.fa-meetup:before {
  content: "\f2e0";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
/*!
 *  Material Design Iconic Font by Sergey Kupletsky (@zavoloklom) - http://zavoloklom.github.io/material-design-iconic-font/
 *  License - http://zavoloklom.github.io/material-design-iconic-font/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
@font-face {
  font-family: 'Material-Design-Iconic-Font';
  src: url('../fonts/Material-Design-Iconic-Font.woff2?v=2.2.0') format('woff2'), url('../fonts/Material-Design-Iconic-Font.woff?v=2.2.0') format('woff'), url('../fonts/Material-Design-Iconic-Font.ttf?v=2.2.0') format('truetype');
  font-weight: normal;
  font-style: normal;
}
.zmdi {
  display: inline-block;
  font: normal normal normal 14px/1 'Material-Design-Iconic-Font';
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.zmdi-hc-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.zmdi-hc-2x {
  font-size: 2em;
}
.zmdi-hc-3x {
  font-size: 3em;
}
.zmdi-hc-4x {
  font-size: 4em;
}
.zmdi-hc-5x {
  font-size: 5em;
}
.zmdi-hc-fw {
  width: 1.28571429em;
  text-align: center;
}
.zmdi-hc-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.zmdi-hc-ul > li {
  position: relative;
}
.zmdi-hc-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.zmdi-hc-li.zmdi-hc-lg {
  left: -1.85714286em;
}
.zmdi-hc-border {
  padding: .1em .25em;
  border: solid 0.1em #9e9e9e;
  border-radius: 2px;
}
.zmdi-hc-border-circle {
  padding: .1em .25em;
  border: solid 0.1em #9e9e9e;
  border-radius: 50%;
}
.zmdi.pull-left {
  float: left;
  margin-right: .15em;
}
.zmdi.pull-right {
  float: right;
  margin-left: .15em;
}
.zmdi-hc-spin {
  -webkit-animation: zmdi-spin 1.5s infinite linear;
          animation: zmdi-spin 1.5s infinite linear;
}
.zmdi-hc-spin-reverse {
  -webkit-animation: zmdi-spin-reverse 1.5s infinite linear;
          animation: zmdi-spin-reverse 1.5s infinite linear;
}
@-webkit-keyframes zmdi-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}
@keyframes zmdi-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}
@-webkit-keyframes zmdi-spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-359deg);
            transform: rotate(-359deg);
  }
}
@keyframes zmdi-spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-359deg);
            transform: rotate(-359deg);
  }
}
.zmdi-hc-rotate-90 {
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg);
}
.zmdi-hc-rotate-180 {
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg);
}
.zmdi-hc-rotate-270 {
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg);
}
.zmdi-hc-flip-horizontal {
  -webkit-transform: scale(-1, 1);
      -ms-transform: scale(-1, 1);
          transform: scale(-1, 1);
}
.zmdi-hc-flip-vertical {
  -webkit-transform: scale(1, -1);
      -ms-transform: scale(1, -1);
          transform: scale(1, -1);
}
.zmdi-hc-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.zmdi-hc-stack-1x,
.zmdi-hc-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.zmdi-hc-stack-1x {
  line-height: inherit;
}
.zmdi-hc-stack-2x {
  font-size: 2em;
}
.zmdi-hc-inverse {
  color: #ffffff;
}
/* Material Design Iconic Font uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.zmdi-3d-rotation:before {
  content: '\f101';
}
.zmdi-airplane-off:before {
  content: '\f102';
}
.zmdi-airplane:before {
  content: '\f103';
}
.zmdi-album:before {
  content: '\f104';
}
.zmdi-archive:before {
  content: '\f105';
}
.zmdi-assignment-account:before {
  content: '\f106';
}
.zmdi-assignment-alert:before {
  content: '\f107';
}
.zmdi-assignment-check:before {
  content: '\f108';
}
.zmdi-assignment-o:before {
  content: '\f109';
}
.zmdi-assignment-return:before {
  content: '\f10a';
}
.zmdi-assignment-returned:before {
  content: '\f10b';
}
.zmdi-assignment:before {
  content: '\f10c';
}
.zmdi-attachment-alt:before {
  content: '\f10d';
}
.zmdi-attachment:before {
  content: '\f10e';
}
.zmdi-audio:before {
  content: '\f10f';
}
.zmdi-badge-check:before {
  content: '\f110';
}
.zmdi-balance-wallet:before {
  content: '\f111';
}
.zmdi-balance:before {
  content: '\f112';
}
.zmdi-battery-alert:before {
  content: '\f113';
}
.zmdi-battery-flash:before {
  content: '\f114';
}
.zmdi-battery-unknown:before {
  content: '\f115';
}
.zmdi-battery:before {
  content: '\f116';
}
.zmdi-bike:before {
  content: '\f117';
}
.zmdi-block-alt:before {
  content: '\f118';
}
.zmdi-block:before {
  content: '\f119';
}
.zmdi-boat:before {
  content: '\f11a';
}
.zmdi-book-image:before {
  content: '\f11b';
}
.zmdi-book:before {
  content: '\f11c';
}
.zmdi-bookmark-outline:before {
  content: '\f11d';
}
.zmdi-bookmark:before {
  content: '\f11e';
}
.zmdi-brush:before {
  content: '\f11f';
}
.zmdi-bug:before {
  content: '\f120';
}
.zmdi-bus:before {
  content: '\f121';
}
.zmdi-cake:before {
  content: '\f122';
}
.zmdi-car-taxi:before {
  content: '\f123';
}
.zmdi-car-wash:before {
  content: '\f124';
}
.zmdi-car:before {
  content: '\f125';
}
.zmdi-card-giftcard:before {
  content: '\f126';
}
.zmdi-card-membership:before {
  content: '\f127';
}
.zmdi-card-travel:before {
  content: '\f128';
}
.zmdi-card:before {
  content: '\f129';
}
.zmdi-case-check:before {
  content: '\f12a';
}
.zmdi-case-download:before {
  content: '\f12b';
}
.zmdi-case-play:before {
  content: '\f12c';
}
.zmdi-case:before {
  content: '\f12d';
}
.zmdi-cast-connected:before {
  content: '\f12e';
}
.zmdi-cast:before {
  content: '\f12f';
}
.zmdi-chart-donut:before {
  content: '\f130';
}
.zmdi-chart:before {
  content: '\f131';
}
.zmdi-city-alt:before {
  content: '\f132';
}
.zmdi-city:before {
  content: '\f133';
}
.zmdi-close-circle-o:before {
  content: '\f134';
}
.zmdi-close-circle:before {
  content: '\f135';
}
.zmdi-close:before {
  content: '\f136';
}
.zmdi-cocktail:before {
  content: '\f137';
}
.zmdi-code-setting:before {
  content: '\f138';
}
.zmdi-code-smartphone:before {
  content: '\f139';
}
.zmdi-code:before {
  content: '\f13a';
}
.zmdi-coffee:before {
  content: '\f13b';
}
.zmdi-collection-bookmark:before {
  content: '\f13c';
}
.zmdi-collection-case-play:before {
  content: '\f13d';
}
.zmdi-collection-folder-image:before {
  content: '\f13e';
}
.zmdi-collection-image-o:before {
  content: '\f13f';
}
.zmdi-collection-image:before {
  content: '\f140';
}
.zmdi-collection-item-1:before {
  content: '\f141';
}
.zmdi-collection-item-2:before {
  content: '\f142';
}
.zmdi-collection-item-3:before {
  content: '\f143';
}
.zmdi-collection-item-4:before {
  content: '\f144';
}
.zmdi-collection-item-5:before {
  content: '\f145';
}
.zmdi-collection-item-6:before {
  content: '\f146';
}
.zmdi-collection-item-7:before {
  content: '\f147';
}
.zmdi-collection-item-8:before {
  content: '\f148';
}
.zmdi-collection-item-9-plus:before {
  content: '\f149';
}
.zmdi-collection-item-9:before {
  content: '\f14a';
}
.zmdi-collection-item:before {
  content: '\f14b';
}
.zmdi-collection-music:before {
  content: '\f14c';
}
.zmdi-collection-pdf:before {
  content: '\f14d';
}
.zmdi-collection-plus:before {
  content: '\f14e';
}
.zmdi-collection-speaker:before {
  content: '\f14f';
}
.zmdi-collection-text:before {
  content: '\f150';
}
.zmdi-collection-video:before {
  content: '\f151';
}
.zmdi-compass:before {
  content: '\f152';
}
.zmdi-cutlery:before {
  content: '\f153';
}
.zmdi-delete:before {
  content: '\f154';
}
.zmdi-dialpad:before {
  content: '\f155';
}
.zmdi-dns:before {
  content: '\f156';
}
.zmdi-drink:before {
  content: '\f157';
}
.zmdi-edit:before {
  content: '\f158';
}
.zmdi-email-open:before {
  content: '\f159';
}
.zmdi-email:before {
  content: '\f15a';
}
.zmdi-eye-off:before {
  content: '\f15b';
}
.zmdi-eye:before {
  content: '\f15c';
}
.zmdi-eyedropper:before {
  content: '\f15d';
}
.zmdi-favorite-outline:before {
  content: '\f15e';
}
.zmdi-favorite:before {
  content: '\f15f';
}
.zmdi-filter-list:before {
  content: '\f160';
}
.zmdi-fire:before {
  content: '\f161';
}
.zmdi-flag:before {
  content: '\f162';
}
.zmdi-flare:before {
  content: '\f163';
}
.zmdi-flash-auto:before {
  content: '\f164';
}
.zmdi-flash-off:before {
  content: '\f165';
}
.zmdi-flash:before {
  content: '\f166';
}
.zmdi-flip:before {
  content: '\f167';
}
.zmdi-flower-alt:before {
  content: '\f168';
}
.zmdi-flower:before {
  content: '\f169';
}
.zmdi-font:before {
  content: '\f16a';
}
.zmdi-fullscreen-alt:before {
  content: '\f16b';
}
.zmdi-fullscreen-exit:before {
  content: '\f16c';
}
.zmdi-fullscreen:before {
  content: '\f16d';
}
.zmdi-functions:before {
  content: '\f16e';
}
.zmdi-gas-station:before {
  content: '\f16f';
}
.zmdi-gesture:before {
  content: '\f170';
}
.zmdi-globe-alt:before {
  content: '\f171';
}
.zmdi-globe-lock:before {
  content: '\f172';
}
.zmdi-globe:before {
  content: '\f173';
}
.zmdi-graduation-cap:before {
  content: '\f174';
}
.zmdi-home:before {
  content: '\f175';
}
.zmdi-hospital-alt:before {
  content: '\f176';
}
.zmdi-hospital:before {
  content: '\f177';
}
.zmdi-hotel:before {
  content: '\f178';
}
.zmdi-hourglass-alt:before {
  content: '\f179';
}
.zmdi-hourglass-outline:before {
  content: '\f17a';
}
.zmdi-hourglass:before {
  content: '\f17b';
}
.zmdi-http:before {
  content: '\f17c';
}
.zmdi-image-alt:before {
  content: '\f17d';
}
.zmdi-image-o:before {
  content: '\f17e';
}
.zmdi-image:before {
  content: '\f17f';
}
.zmdi-inbox:before {
  content: '\f180';
}
.zmdi-invert-colors-off:before {
  content: '\f181';
}
.zmdi-invert-colors:before {
  content: '\f182';
}
.zmdi-key:before {
  content: '\f183';
}
.zmdi-label-alt-outline:before {
  content: '\f184';
}
.zmdi-label-alt:before {
  content: '\f185';
}
.zmdi-label-heart:before {
  content: '\f186';
}
.zmdi-label:before {
  content: '\f187';
}
.zmdi-labels:before {
  content: '\f188';
}
.zmdi-lamp:before {
  content: '\f189';
}
.zmdi-landscape:before {
  content: '\f18a';
}
.zmdi-layers-off:before {
  content: '\f18b';
}
.zmdi-layers:before {
  content: '\f18c';
}
.zmdi-library:before {
  content: '\f18d';
}
.zmdi-link:before {
  content: '\f18e';
}
.zmdi-lock-open:before {
  content: '\f18f';
}
.zmdi-lock-outline:before {
  content: '\f190';
}
.zmdi-lock:before {
  content: '\f191';
}
.zmdi-mail-reply-all:before {
  content: '\f192';
}
.zmdi-mail-reply:before {
  content: '\f193';
}
.zmdi-mail-send:before {
  content: '\f194';
}
.zmdi-mall:before {
  content: '\f195';
}
.zmdi-map:before {
  content: '\f196';
}
.zmdi-menu:before {
  content: '\f197';
}
.zmdi-money-box:before {
  content: '\f198';
}
.zmdi-money-off:before {
  content: '\f199';
}
.zmdi-money:before {
  content: '\f19a';
}
.zmdi-more-vert:before {
  content: '\f19b';
}
.zmdi-more:before {
  content: '\f19c';
}
.zmdi-movie-alt:before {
  content: '\f19d';
}
.zmdi-movie:before {
  content: '\f19e';
}
.zmdi-nature-people:before {
  content: '\f19f';
}
.zmdi-nature:before {
  content: '\f1a0';
}
.zmdi-navigation:before {
  content: '\f1a1';
}
.zmdi-open-in-browser:before {
  content: '\f1a2';
}
.zmdi-open-in-new:before {
  content: '\f1a3';
}
.zmdi-palette:before {
  content: '\f1a4';
}
.zmdi-parking:before {
  content: '\f1a5';
}
.zmdi-pin-account:before {
  content: '\f1a6';
}
.zmdi-pin-assistant:before {
  content: '\f1a7';
}
.zmdi-pin-drop:before {
  content: '\f1a8';
}
.zmdi-pin-help:before {
  content: '\f1a9';
}
.zmdi-pin-off:before {
  content: '\f1aa';
}
.zmdi-pin:before {
  content: '\f1ab';
}
.zmdi-pizza:before {
  content: '\f1ac';
}
.zmdi-plaster:before {
  content: '\f1ad';
}
.zmdi-power-setting:before {
  content: '\f1ae';
}
.zmdi-power:before {
  content: '\f1af';
}
.zmdi-print:before {
  content: '\f1b0';
}
.zmdi-puzzle-piece:before {
  content: '\f1b1';
}
.zmdi-quote:before {
  content: '\f1b2';
}
.zmdi-railway:before {
  content: '\f1b3';
}
.zmdi-receipt:before {
  content: '\f1b4';
}
.zmdi-refresh-alt:before {
  content: '\f1b5';
}
.zmdi-refresh-sync-alert:before {
  content: '\f1b6';
}
.zmdi-refresh-sync-off:before {
  content: '\f1b7';
}
.zmdi-refresh-sync:before {
  content: '\f1b8';
}
.zmdi-refresh:before {
  content: '\f1b9';
}
.zmdi-roller:before {
  content: '\f1ba';
}
.zmdi-ruler:before {
  content: '\f1bb';
}
.zmdi-scissors:before {
  content: '\f1bc';
}
.zmdi-screen-rotation-lock:before {
  content: '\f1bd';
}
.zmdi-screen-rotation:before {
  content: '\f1be';
}
.zmdi-search-for:before {
  content: '\f1bf';
}
.zmdi-search-in-file:before {
  content: '\f1c0';
}
.zmdi-search-in-page:before {
  content: '\f1c1';
}
.zmdi-search-replace:before {
  content: '\f1c2';
}
.zmdi-search:before {
  content: '\f1c3';
}
.zmdi-seat:before {
  content: '\f1c4';
}
.zmdi-settings-square:before {
  content: '\f1c5';
}
.zmdi-settings:before {
  content: '\f1c6';
}
.zmdi-shield-check:before {
  content: '\f1c7';
}
.zmdi-shield-security:before {
  content: '\f1c8';
}
.zmdi-shopping-basket:before {
  content: '\f1c9';
}
.zmdi-shopping-cart-plus:before {
  content: '\f1ca';
}
.zmdi-shopping-cart:before {
  content: '\f1cb';
}
.zmdi-sign-in:before {
  content: '\f1cc';
}
.zmdi-sort-amount-asc:before {
  content: '\f1cd';
}
.zmdi-sort-amount-desc:before {
  content: '\f1ce';
}
.zmdi-sort-asc:before {
  content: '\f1cf';
}
.zmdi-sort-desc:before {
  content: '\f1d0';
}
.zmdi-spellcheck:before {
  content: '\f1d1';
}
.zmdi-storage:before {
  content: '\f1d2';
}
.zmdi-store-24:before {
  content: '\f1d3';
}
.zmdi-store:before {
  content: '\f1d4';
}
.zmdi-subway:before {
  content: '\f1d5';
}
.zmdi-sun:before {
  content: '\f1d6';
}
.zmdi-tab-unselected:before {
  content: '\f1d7';
}
.zmdi-tab:before {
  content: '\f1d8';
}
.zmdi-tag-close:before {
  content: '\f1d9';
}
.zmdi-tag-more:before {
  content: '\f1da';
}
.zmdi-tag:before {
  content: '\f1db';
}
.zmdi-thumb-down:before {
  content: '\f1dc';
}
.zmdi-thumb-up-down:before {
  content: '\f1dd';
}
.zmdi-thumb-up:before {
  content: '\f1de';
}
.zmdi-ticket-star:before {
  content: '\f1df';
}
.zmdi-toll:before {
  content: '\f1e0';
}
.zmdi-toys:before {
  content: '\f1e1';
}
.zmdi-traffic:before {
  content: '\f1e2';
}
.zmdi-translate:before {
  content: '\f1e3';
}
.zmdi-triangle-down:before {
  content: '\f1e4';
}
.zmdi-triangle-up:before {
  content: '\f1e5';
}
.zmdi-truck:before {
  content: '\f1e6';
}
.zmdi-turning-sign:before {
  content: '\f1e7';
}
.zmdi-wallpaper:before {
  content: '\f1e8';
}
.zmdi-washing-machine:before {
  content: '\f1e9';
}
.zmdi-window-maximize:before {
  content: '\f1ea';
}
.zmdi-window-minimize:before {
  content: '\f1eb';
}
.zmdi-window-restore:before {
  content: '\f1ec';
}
.zmdi-wrench:before {
  content: '\f1ed';
}
.zmdi-zoom-in:before {
  content: '\f1ee';
}
.zmdi-zoom-out:before {
  content: '\f1ef';
}
.zmdi-alert-circle-o:before {
  content: '\f1f0';
}
.zmdi-alert-circle:before {
  content: '\f1f1';
}
.zmdi-alert-octagon:before {
  content: '\f1f2';
}
.zmdi-alert-polygon:before {
  content: '\f1f3';
}
.zmdi-alert-triangle:before {
  content: '\f1f4';
}
.zmdi-help-outline:before {
  content: '\f1f5';
}
.zmdi-help:before {
  content: '\f1f6';
}
.zmdi-info-outline:before {
  content: '\f1f7';
}
.zmdi-info:before {
  content: '\f1f8';
}
.zmdi-notifications-active:before {
  content: '\f1f9';
}
.zmdi-notifications-add:before {
  content: '\f1fa';
}
.zmdi-notifications-none:before {
  content: '\f1fb';
}
.zmdi-notifications-off:before {
  content: '\f1fc';
}
.zmdi-notifications-paused:before {
  content: '\f1fd';
}
.zmdi-notifications:before {
  content: '\f1fe';
}
.zmdi-account-add:before {
  content: '\f1ff';
}
.zmdi-account-box-mail:before {
  content: '\f200';
}
.zmdi-account-box-o:before {
  content: '\f201';
}
.zmdi-account-box-phone:before {
  content: '\f202';
}
.zmdi-account-box:before {
  content: '\f203';
}
.zmdi-account-calendar:before {
  content: '\f204';
}
.zmdi-account-circle:before {
  content: '\f205';
}
.zmdi-account-o:before {
  content: '\f206';
}
.zmdi-account:before {
  content: '\f207';
}
.zmdi-accounts-add:before {
  content: '\f208';
}
.zmdi-accounts-alt:before {
  content: '\f209';
}
.zmdi-accounts-list-alt:before {
  content: '\f20a';
}
.zmdi-accounts-list:before {
  content: '\f20b';
}
.zmdi-accounts-outline:before {
  content: '\f20c';
}
.zmdi-accounts:before {
  content: '\f20d';
}
.zmdi-face:before {
  content: '\f20e';
}
.zmdi-female:before {
  content: '\f20f';
}
.zmdi-male-alt:before {
  content: '\f210';
}
.zmdi-male-female:before {
  content: '\f211';
}
.zmdi-male:before {
  content: '\f212';
}
.zmdi-mood-bad:before {
  content: '\f213';
}
.zmdi-mood:before {
  content: '\f214';
}
.zmdi-run:before {
  content: '\f215';
}
.zmdi-walk:before {
  content: '\f216';
}
.zmdi-cloud-box:before {
  content: '\f217';
}
.zmdi-cloud-circle:before {
  content: '\f218';
}
.zmdi-cloud-done:before {
  content: '\f219';
}
.zmdi-cloud-download:before {
  content: '\f21a';
}
.zmdi-cloud-off:before {
  content: '\f21b';
}
.zmdi-cloud-outline-alt:before {
  content: '\f21c';
}
.zmdi-cloud-outline:before {
  content: '\f21d';
}
.zmdi-cloud-upload:before {
  content: '\f21e';
}
.zmdi-cloud:before {
  content: '\f21f';
}
.zmdi-download:before {
  content: '\f220';
}
.zmdi-file-plus:before {
  content: '\f221';
}
.zmdi-file-text:before {
  content: '\f222';
}
.zmdi-file:before {
  content: '\f223';
}
.zmdi-folder-outline:before {
  content: '\f224';
}
.zmdi-folder-person:before {
  content: '\f225';
}
.zmdi-folder-star-alt:before {
  content: '\f226';
}
.zmdi-folder-star:before {
  content: '\f227';
}
.zmdi-folder:before {
  content: '\f228';
}
.zmdi-gif:before {
  content: '\f229';
}
.zmdi-upload:before {
  content: '\f22a';
}
.zmdi-border-all:before {
  content: '\f22b';
}
.zmdi-border-bottom:before {
  content: '\f22c';
}
.zmdi-border-clear:before {
  content: '\f22d';
}
.zmdi-border-color:before {
  content: '\f22e';
}
.zmdi-border-horizontal:before {
  content: '\f22f';
}
.zmdi-border-inner:before {
  content: '\f230';
}
.zmdi-border-left:before {
  content: '\f231';
}
.zmdi-border-outer:before {
  content: '\f232';
}
.zmdi-border-right:before {
  content: '\f233';
}
.zmdi-border-style:before {
  content: '\f234';
}
.zmdi-border-top:before {
  content: '\f235';
}
.zmdi-border-vertical:before {
  content: '\f236';
}
.zmdi-copy:before {
  content: '\f237';
}
.zmdi-crop:before {
  content: '\f238';
}
.zmdi-format-align-center:before {
  content: '\f239';
}
.zmdi-format-align-justify:before {
  content: '\f23a';
}
.zmdi-format-align-left:before {
  content: '\f23b';
}
.zmdi-format-align-right:before {
  content: '\f23c';
}
.zmdi-format-bold:before {
  content: '\f23d';
}
.zmdi-format-clear-all:before {
  content: '\f23e';
}
.zmdi-format-clear:before {
  content: '\f23f';
}
.zmdi-format-color-fill:before {
  content: '\f240';
}
.zmdi-format-color-reset:before {
  content: '\f241';
}
.zmdi-format-color-text:before {
  content: '\f242';
}
.zmdi-format-indent-decrease:before {
  content: '\f243';
}
.zmdi-format-indent-increase:before {
  content: '\f244';
}
.zmdi-format-italic:before {
  content: '\f245';
}
.zmdi-format-line-spacing:before {
  content: '\f246';
}
.zmdi-format-list-bulleted:before {
  content: '\f247';
}
.zmdi-format-list-numbered:before {
  content: '\f248';
}
.zmdi-format-ltr:before {
  content: '\f249';
}
.zmdi-format-rtl:before {
  content: '\f24a';
}
.zmdi-format-size:before {
  content: '\f24b';
}
.zmdi-format-strikethrough-s:before {
  content: '\f24c';
}
.zmdi-format-strikethrough:before {
  content: '\f24d';
}
.zmdi-format-subject:before {
  content: '\f24e';
}
.zmdi-format-underlined:before {
  content: '\f24f';
}
.zmdi-format-valign-bottom:before {
  content: '\f250';
}
.zmdi-format-valign-center:before {
  content: '\f251';
}
.zmdi-format-valign-top:before {
  content: '\f252';
}
.zmdi-redo:before {
  content: '\f253';
}
.zmdi-select-all:before {
  content: '\f254';
}
.zmdi-space-bar:before {
  content: '\f255';
}
.zmdi-text-format:before {
  content: '\f256';
}
.zmdi-transform:before {
  content: '\f257';
}
.zmdi-undo:before {
  content: '\f258';
}
.zmdi-wrap-text:before {
  content: '\f259';
}
.zmdi-comment-alert:before {
  content: '\f25a';
}
.zmdi-comment-alt-text:before {
  content: '\f25b';
}
.zmdi-comment-alt:before {
  content: '\f25c';
}
.zmdi-comment-edit:before {
  content: '\f25d';
}
.zmdi-comment-image:before {
  content: '\f25e';
}
.zmdi-comment-list:before {
  content: '\f25f';
}
.zmdi-comment-more:before {
  content: '\f260';
}
.zmdi-comment-outline:before {
  content: '\f261';
}
.zmdi-comment-text-alt:before {
  content: '\f262';
}
.zmdi-comment-text:before {
  content: '\f263';
}
.zmdi-comment-video:before {
  content: '\f264';
}
.zmdi-comment:before {
  content: '\f265';
}
.zmdi-comments:before {
  content: '\f266';
}
.zmdi-check-all:before {
  content: '\f267';
}
.zmdi-check-circle-u:before {
  content: '\f268';
}
.zmdi-check-circle:before {
  content: '\f269';
}
.zmdi-check-square:before {
  content: '\f26a';
}
.zmdi-check:before {
  content: '\f26b';
}
.zmdi-circle-o:before {
  content: '\f26c';
}
.zmdi-circle:before {
  content: '\f26d';
}
.zmdi-dot-circle-alt:before {
  content: '\f26e';
}
.zmdi-dot-circle:before {
  content: '\f26f';
}
.zmdi-minus-circle-outline:before {
  content: '\f270';
}
.zmdi-minus-circle:before {
  content: '\f271';
}
.zmdi-minus-square:before {
  content: '\f272';
}
.zmdi-minus:before {
  content: '\f273';
}
.zmdi-plus-circle-o-duplicate:before {
  content: '\f274';
}
.zmdi-plus-circle-o:before {
  content: '\f275';
}
.zmdi-plus-circle:before {
  content: '\f276';
}
.zmdi-plus-square:before {
  content: '\f277';
}
.zmdi-plus:before {
  content: '\f278';
}
.zmdi-square-o:before {
  content: '\f279';
}
.zmdi-star-circle:before {
  content: '\f27a';
}
.zmdi-star-half:before {
  content: '\f27b';
}
.zmdi-star-outline:before {
  content: '\f27c';
}
.zmdi-star:before {
  content: '\f27d';
}
.zmdi-bluetooth-connected:before {
  content: '\f27e';
}
.zmdi-bluetooth-off:before {
  content: '\f27f';
}
.zmdi-bluetooth-search:before {
  content: '\f280';
}
.zmdi-bluetooth-setting:before {
  content: '\f281';
}
.zmdi-bluetooth:before {
  content: '\f282';
}
.zmdi-camera-add:before {
  content: '\f283';
}
.zmdi-camera-alt:before {
  content: '\f284';
}
.zmdi-camera-bw:before {
  content: '\f285';
}
.zmdi-camera-front:before {
  content: '\f286';
}
.zmdi-camera-mic:before {
  content: '\f287';
}
.zmdi-camera-party-mode:before {
  content: '\f288';
}
.zmdi-camera-rear:before {
  content: '\f289';
}
.zmdi-camera-roll:before {
  content: '\f28a';
}
.zmdi-camera-switch:before {
  content: '\f28b';
}
.zmdi-camera:before {
  content: '\f28c';
}
.zmdi-card-alert:before {
  content: '\f28d';
}
.zmdi-card-off:before {
  content: '\f28e';
}
.zmdi-card-sd:before {
  content: '\f28f';
}
.zmdi-card-sim:before {
  content: '\f290';
}
.zmdi-desktop-mac:before {
  content: '\f291';
}
.zmdi-desktop-windows:before {
  content: '\f292';
}
.zmdi-device-hub:before {
  content: '\f293';
}
.zmdi-devices-off:before {
  content: '\f294';
}
.zmdi-devices:before {
  content: '\f295';
}
.zmdi-dock:before {
  content: '\f296';
}
.zmdi-floppy:before {
  content: '\f297';
}
.zmdi-gamepad:before {
  content: '\f298';
}
.zmdi-gps-dot:before {
  content: '\f299';
}
.zmdi-gps-off:before {
  content: '\f29a';
}
.zmdi-gps:before {
  content: '\f29b';
}
.zmdi-headset-mic:before {
  content: '\f29c';
}
.zmdi-headset:before {
  content: '\f29d';
}
.zmdi-input-antenna:before {
  content: '\f29e';
}
.zmdi-input-composite:before {
  content: '\f29f';
}
.zmdi-input-hdmi:before {
  content: '\f2a0';
}
.zmdi-input-power:before {
  content: '\f2a1';
}
.zmdi-input-svideo:before {
  content: '\f2a2';
}
.zmdi-keyboard-hide:before {
  content: '\f2a3';
}
.zmdi-keyboard:before {
  content: '\f2a4';
}
.zmdi-laptop-chromebook:before {
  content: '\f2a5';
}
.zmdi-laptop-mac:before {
  content: '\f2a6';
}
.zmdi-laptop:before {
  content: '\f2a7';
}
.zmdi-mic-off:before {
  content: '\f2a8';
}
.zmdi-mic-outline:before {
  content: '\f2a9';
}
.zmdi-mic-setting:before {
  content: '\f2aa';
}
.zmdi-mic:before {
  content: '\f2ab';
}
.zmdi-mouse:before {
  content: '\f2ac';
}
.zmdi-network-alert:before {
  content: '\f2ad';
}
.zmdi-network-locked:before {
  content: '\f2ae';
}
.zmdi-network-off:before {
  content: '\f2af';
}
.zmdi-network-outline:before {
  content: '\f2b0';
}
.zmdi-network-setting:before {
  content: '\f2b1';
}
.zmdi-network:before {
  content: '\f2b2';
}
.zmdi-phone-bluetooth:before {
  content: '\f2b3';
}
.zmdi-phone-end:before {
  content: '\f2b4';
}
.zmdi-phone-forwarded:before {
  content: '\f2b5';
}
.zmdi-phone-in-talk:before {
  content: '\f2b6';
}
.zmdi-phone-locked:before {
  content: '\f2b7';
}
.zmdi-phone-missed:before {
  content: '\f2b8';
}
.zmdi-phone-msg:before {
  content: '\f2b9';
}
.zmdi-phone-paused:before {
  content: '\f2ba';
}
.zmdi-phone-ring:before {
  content: '\f2bb';
}
.zmdi-phone-setting:before {
  content: '\f2bc';
}
.zmdi-phone-sip:before {
  content: '\f2bd';
}
.zmdi-phone:before {
  content: '\f2be';
}
.zmdi-portable-wifi-changes:before {
  content: '\f2bf';
}
.zmdi-portable-wifi-off:before {
  content: '\f2c0';
}
.zmdi-portable-wifi:before {
  content: '\f2c1';
}
.zmdi-radio:before {
  content: '\f2c2';
}
.zmdi-reader:before {
  content: '\f2c3';
}
.zmdi-remote-control-alt:before {
  content: '\f2c4';
}
.zmdi-remote-control:before {
  content: '\f2c5';
}
.zmdi-router:before {
  content: '\f2c6';
}
.zmdi-scanner:before {
  content: '\f2c7';
}
.zmdi-smartphone-android:before {
  content: '\f2c8';
}
.zmdi-smartphone-download:before {
  content: '\f2c9';
}
.zmdi-smartphone-erase:before {
  content: '\f2ca';
}
.zmdi-smartphone-info:before {
  content: '\f2cb';
}
.zmdi-smartphone-iphone:before {
  content: '\f2cc';
}
.zmdi-smartphone-landscape-lock:before {
  content: '\f2cd';
}
.zmdi-smartphone-landscape:before {
  content: '\f2ce';
}
.zmdi-smartphone-lock:before {
  content: '\f2cf';
}
.zmdi-smartphone-portrait-lock:before {
  content: '\f2d0';
}
.zmdi-smartphone-ring:before {
  content: '\f2d1';
}
.zmdi-smartphone-setting:before {
  content: '\f2d2';
}
.zmdi-smartphone-setup:before {
  content: '\f2d3';
}
.zmdi-smartphone:before {
  content: '\f2d4';
}
.zmdi-speaker:before {
  content: '\f2d5';
}
.zmdi-tablet-android:before {
  content: '\f2d6';
}
.zmdi-tablet-mac:before {
  content: '\f2d7';
}
.zmdi-tablet:before {
  content: '\f2d8';
}
.zmdi-tv-alt-play:before {
  content: '\f2d9';
}
.zmdi-tv-list:before {
  content: '\f2da';
}
.zmdi-tv-play:before {
  content: '\f2db';
}
.zmdi-tv:before {
  content: '\f2dc';
}
.zmdi-usb:before {
  content: '\f2dd';
}
.zmdi-videocam-off:before {
  content: '\f2de';
}
.zmdi-videocam-switch:before {
  content: '\f2df';
}
.zmdi-videocam:before {
  content: '\f2e0';
}
.zmdi-watch:before {
  content: '\f2e1';
}
.zmdi-wifi-alt-2:before {
  content: '\f2e2';
}
.zmdi-wifi-alt:before {
  content: '\f2e3';
}
.zmdi-wifi-info:before {
  content: '\f2e4';
}
.zmdi-wifi-lock:before {
  content: '\f2e5';
}
.zmdi-wifi-off:before {
  content: '\f2e6';
}
.zmdi-wifi-outline:before {
  content: '\f2e7';
}
.zmdi-wifi:before {
  content: '\f2e8';
}
.zmdi-arrow-left-bottom:before {
  content: '\f2e9';
}
.zmdi-arrow-left:before {
  content: '\f2ea';
}
.zmdi-arrow-merge:before {
  content: '\f2eb';
}
.zmdi-arrow-missed:before {
  content: '\f2ec';
}
.zmdi-arrow-right-top:before {
  content: '\f2ed';
}
.zmdi-arrow-right:before {
  content: '\f2ee';
}
.zmdi-arrow-split:before {
  content: '\f2ef';
}
.zmdi-arrows:before {
  content: '\f2f0';
}
.zmdi-caret-down-circle:before {
  content: '\f2f1';
}
.zmdi-caret-down:before {
  content: '\f2f2';
}
.zmdi-caret-left-circle:before {
  content: '\f2f3';
}
.zmdi-caret-left:before {
  content: '\f2f4';
}
.zmdi-caret-right-circle:before {
  content: '\f2f5';
}
.zmdi-caret-right:before {
  content: '\f2f6';
}
.zmdi-caret-up-circle:before {
  content: '\f2f7';
}
.zmdi-caret-up:before {
  content: '\f2f8';
}
.zmdi-chevron-down:before {
  content: '\f2f9';
}
.zmdi-chevron-left:before {
  content: '\f2fa';
}
.zmdi-chevron-right:before {
  content: '\f2fb';
}
.zmdi-chevron-up:before {
  content: '\f2fc';
}
.zmdi-forward:before {
  content: '\f2fd';
}
.zmdi-long-arrow-down:before {
  content: '\f2fe';
}
.zmdi-long-arrow-left:before {
  content: '\f2ff';
}
.zmdi-long-arrow-return:before {
  content: '\f300';
}
.zmdi-long-arrow-right:before {
  content: '\f301';
}
.zmdi-long-arrow-tab:before {
  content: '\f302';
}
.zmdi-long-arrow-up:before {
  content: '\f303';
}
.zmdi-rotate-ccw:before {
  content: '\f304';
}
.zmdi-rotate-cw:before {
  content: '\f305';
}
.zmdi-rotate-left:before {
  content: '\f306';
}
.zmdi-rotate-right:before {
  content: '\f307';
}
.zmdi-square-down:before {
  content: '\f308';
}
.zmdi-square-right:before {
  content: '\f309';
}
.zmdi-swap-alt:before {
  content: '\f30a';
}
.zmdi-swap-vertical-circle:before {
  content: '\f30b';
}
.zmdi-swap-vertical:before {
  content: '\f30c';
}
.zmdi-swap:before {
  content: '\f30d';
}
.zmdi-trending-down:before {
  content: '\f30e';
}
.zmdi-trending-flat:before {
  content: '\f30f';
}
.zmdi-trending-up:before {
  content: '\f310';
}
.zmdi-unfold-less:before {
  content: '\f311';
}
.zmdi-unfold-more:before {
  content: '\f312';
}
.zmdi-apps:before {
  content: '\f313';
}
.zmdi-grid-off:before {
  content: '\f314';
}
.zmdi-grid:before {
  content: '\f315';
}
.zmdi-view-agenda:before {
  content: '\f316';
}
.zmdi-view-array:before {
  content: '\f317';
}
.zmdi-view-carousel:before {
  content: '\f318';
}
.zmdi-view-column:before {
  content: '\f319';
}
.zmdi-view-comfy:before {
  content: '\f31a';
}
.zmdi-view-compact:before {
  content: '\f31b';
}
.zmdi-view-dashboard:before {
  content: '\f31c';
}
.zmdi-view-day:before {
  content: '\f31d';
}
.zmdi-view-headline:before {
  content: '\f31e';
}
.zmdi-view-list-alt:before {
  content: '\f31f';
}
.zmdi-view-list:before {
  content: '\f320';
}
.zmdi-view-module:before {
  content: '\f321';
}
.zmdi-view-quilt:before {
  content: '\f322';
}
.zmdi-view-stream:before {
  content: '\f323';
}
.zmdi-view-subtitles:before {
  content: '\f324';
}
.zmdi-view-toc:before {
  content: '\f325';
}
.zmdi-view-web:before {
  content: '\f326';
}
.zmdi-view-week:before {
  content: '\f327';
}
.zmdi-widgets:before {
  content: '\f328';
}
.zmdi-alarm-check:before {
  content: '\f329';
}
.zmdi-alarm-off:before {
  content: '\f32a';
}
.zmdi-alarm-plus:before {
  content: '\f32b';
}
.zmdi-alarm-snooze:before {
  content: '\f32c';
}
.zmdi-alarm:before {
  content: '\f32d';
}
.zmdi-calendar-alt:before {
  content: '\f32e';
}
.zmdi-calendar-check:before {
  content: '\f32f';
}
.zmdi-calendar-close:before {
  content: '\f330';
}
.zmdi-calendar-note:before {
  content: '\f331';
}
.zmdi-calendar:before {
  content: '\f332';
}
.zmdi-time-countdown:before {
  content: '\f333';
}
.zmdi-time-interval:before {
  content: '\f334';
}
.zmdi-time-restore-setting:before {
  content: '\f335';
}
.zmdi-time-restore:before {
  content: '\f336';
}
.zmdi-time:before {
  content: '\f337';
}
.zmdi-timer-off:before {
  content: '\f338';
}
.zmdi-timer:before {
  content: '\f339';
}
.zmdi-android-alt:before {
  content: '\f33a';
}
.zmdi-android:before {
  content: '\f33b';
}
.zmdi-apple:before {
  content: '\f33c';
}
.zmdi-behance:before {
  content: '\f33d';
}
.zmdi-codepen:before {
  content: '\f33e';
}
.zmdi-dribbble:before {
  content: '\f33f';
}
.zmdi-dropbox:before {
  content: '\f340';
}
.zmdi-evernote:before {
  content: '\f341';
}
.zmdi-facebook-box:before {
  content: '\f342';
}
.zmdi-facebook:before {
  content: '\f343';
}
.zmdi-github-box:before {
  content: '\f344';
}
.zmdi-github:before {
  content: '\f345';
}
.zmdi-google-drive:before {
  content: '\f346';
}
.zmdi-google-earth:before {
  content: '\f347';
}
.zmdi-google-glass:before {
  content: '\f348';
}
.zmdi-google-maps:before {
  content: '\f349';
}
.zmdi-google-pages:before {
  content: '\f34a';
}
.zmdi-google-play:before {
  content: '\f34b';
}
.zmdi-google-plus-box:before {
  content: '\f34c';
}
.zmdi-google-plus:before {
  content: '\f34d';
}
.zmdi-google:before {
  content: '\f34e';
}
.zmdi-instagram:before {
  content: '\f34f';
}
.zmdi-language-css3:before {
  content: '\f350';
}
.zmdi-language-html5:before {
  content: '\f351';
}
.zmdi-language-javascript:before {
  content: '\f352';
}
.zmdi-language-python-alt:before {
  content: '\f353';
}
.zmdi-language-python:before {
  content: '\f354';
}
.zmdi-lastfm:before {
  content: '\f355';
}
.zmdi-linkedin-box:before {
  content: '\f356';
}
.zmdi-paypal:before {
  content: '\f357';
}
.zmdi-pinterest-box:before {
  content: '\f358';
}
.zmdi-pocket:before {
  content: '\f359';
}
.zmdi-polymer:before {
  content: '\f35a';
}
.zmdi-share:before {
  content: '\f35b';
}
.zmdi-stackoverflow:before {
  content: '\f35c';
}
.zmdi-steam-square:before {
  content: '\f35d';
}
.zmdi-steam:before {
  content: '\f35e';
}
.zmdi-twitter-box:before {
  content: '\f35f';
}
.zmdi-twitter:before {
  content: '\f360';
}
.zmdi-vk:before {
  content: '\f361';
}
.zmdi-wikipedia:before {
  content: '\f362';
}
.zmdi-windows:before {
  content: '\f363';
}
.zmdi-aspect-ratio-alt:before {
  content: '\f364';
}
.zmdi-aspect-ratio:before {
  content: '\f365';
}
.zmdi-blur-circular:before {
  content: '\f366';
}
.zmdi-blur-linear:before {
  content: '\f367';
}
.zmdi-blur-off:before {
  content: '\f368';
}
.zmdi-blur:before {
  content: '\f369';
}
.zmdi-brightness-2:before {
  content: '\f36a';
}
.zmdi-brightness-3:before {
  content: '\f36b';
}
.zmdi-brightness-4:before {
  content: '\f36c';
}
.zmdi-brightness-5:before {
  content: '\f36d';
}
.zmdi-brightness-6:before {
  content: '\f36e';
}
.zmdi-brightness-7:before {
  content: '\f36f';
}
.zmdi-brightness-auto:before {
  content: '\f370';
}
.zmdi-brightness-setting:before {
  content: '\f371';
}
.zmdi-broken-image:before {
  content: '\f372';
}
.zmdi-center-focus-strong:before {
  content: '\f373';
}
.zmdi-center-focus-weak:before {
  content: '\f374';
}
.zmdi-compare:before {
  content: '\f375';
}
.zmdi-crop-16-9:before {
  content: '\f376';
}
.zmdi-crop-3-2:before {
  content: '\f377';
}
.zmdi-crop-5-4:before {
  content: '\f378';
}
.zmdi-crop-7-5:before {
  content: '\f379';
}
.zmdi-crop-din:before {
  content: '\f37a';
}
.zmdi-crop-free:before {
  content: '\f37b';
}
.zmdi-crop-landscape:before {
  content: '\f37c';
}
.zmdi-crop-portrait:before {
  content: '\f37d';
}
.zmdi-crop-square:before {
  content: '\f37e';
}
.zmdi-exposure-alt:before {
  content: '\f37f';
}
.zmdi-exposure:before {
  content: '\f380';
}
.zmdi-filter-b-and-w:before {
  content: '\f381';
}
.zmdi-filter-center-focus:before {
  content: '\f382';
}
.zmdi-filter-frames:before {
  content: '\f383';
}
.zmdi-filter-tilt-shift:before {
  content: '\f384';
}
.zmdi-gradient:before {
  content: '\f385';
}
.zmdi-grain:before {
  content: '\f386';
}
.zmdi-graphic-eq:before {
  content: '\f387';
}
.zmdi-hdr-off:before {
  content: '\f388';
}
.zmdi-hdr-strong:before {
  content: '\f389';
}
.zmdi-hdr-weak:before {
  content: '\f38a';
}
.zmdi-hdr:before {
  content: '\f38b';
}
.zmdi-iridescent:before {
  content: '\f38c';
}
.zmdi-leak-off:before {
  content: '\f38d';
}
.zmdi-leak:before {
  content: '\f38e';
}
.zmdi-looks:before {
  content: '\f38f';
}
.zmdi-loupe:before {
  content: '\f390';
}
.zmdi-panorama-horizontal:before {
  content: '\f391';
}
.zmdi-panorama-vertical:before {
  content: '\f392';
}
.zmdi-panorama-wide-angle:before {
  content: '\f393';
}
.zmdi-photo-size-select-large:before {
  content: '\f394';
}
.zmdi-photo-size-select-small:before {
  content: '\f395';
}
.zmdi-picture-in-picture:before {
  content: '\f396';
}
.zmdi-slideshow:before {
  content: '\f397';
}
.zmdi-texture:before {
  content: '\f398';
}
.zmdi-tonality:before {
  content: '\f399';
}
.zmdi-vignette:before {
  content: '\f39a';
}
.zmdi-wb-auto:before {
  content: '\f39b';
}
.zmdi-eject-alt:before {
  content: '\f39c';
}
.zmdi-eject:before {
  content: '\f39d';
}
.zmdi-equalizer:before {
  content: '\f39e';
}
.zmdi-fast-forward:before {
  content: '\f39f';
}
.zmdi-fast-rewind:before {
  content: '\f3a0';
}
.zmdi-forward-10:before {
  content: '\f3a1';
}
.zmdi-forward-30:before {
  content: '\f3a2';
}
.zmdi-forward-5:before {
  content: '\f3a3';
}
.zmdi-hearing:before {
  content: '\f3a4';
}
.zmdi-pause-circle-outline:before {
  content: '\f3a5';
}
.zmdi-pause-circle:before {
  content: '\f3a6';
}
.zmdi-pause:before {
  content: '\f3a7';
}
.zmdi-play-circle-outline:before {
  content: '\f3a8';
}
.zmdi-play-circle:before {
  content: '\f3a9';
}
.zmdi-play:before {
  content: '\f3aa';
}
.zmdi-playlist-audio:before {
  content: '\f3ab';
}
.zmdi-playlist-plus:before {
  content: '\f3ac';
}
.zmdi-repeat-one:before {
  content: '\f3ad';
}
.zmdi-repeat:before {
  content: '\f3ae';
}
.zmdi-replay-10:before {
  content: '\f3af';
}
.zmdi-replay-30:before {
  content: '\f3b0';
}
.zmdi-replay-5:before {
  content: '\f3b1';
}
.zmdi-replay:before {
  content: '\f3b2';
}
.zmdi-shuffle:before {
  content: '\f3b3';
}
.zmdi-skip-next:before {
  content: '\f3b4';
}
.zmdi-skip-previous:before {
  content: '\f3b5';
}
.zmdi-stop:before {
  content: '\f3b6';
}
.zmdi-surround-sound:before {
  content: '\f3b7';
}
.zmdi-tune:before {
  content: '\f3b8';
}
.zmdi-volume-down:before {
  content: '\f3b9';
}
.zmdi-volume-mute:before {
  content: '\f3ba';
}
.zmdi-volume-off:before {
  content: '\f3bb';
}
.zmdi-volume-up:before {
  content: '\f3bc';
}
.zmdi-n-1-square:before {
  content: '\f3bd';
}
.zmdi-n-2-square:before {
  content: '\f3be';
}
.zmdi-n-3-square:before {
  content: '\f3bf';
}
.zmdi-n-4-square:before {
  content: '\f3c0';
}
.zmdi-n-5-square:before {
  content: '\f3c1';
}
.zmdi-n-6-square:before {
  content: '\f3c2';
}
.zmdi-neg-1:before {
  content: '\f3c3';
}
.zmdi-neg-2:before {
  content: '\f3c4';
}
.zmdi-plus-1:before {
  content: '\f3c5';
}
.zmdi-plus-2:before {
  content: '\f3c6';
}
.zmdi-sec-10:before {
  content: '\f3c7';
}
.zmdi-sec-3:before {
  content: '\f3c8';
}
.zmdi-zero:before {
  content: '\f3c9';
}
.zmdi-airline-seat-flat-angled:before {
  content: '\f3ca';
}
.zmdi-airline-seat-flat:before {
  content: '\f3cb';
}
.zmdi-airline-seat-individual-suite:before {
  content: '\f3cc';
}
.zmdi-airline-seat-legroom-extra:before {
  content: '\f3cd';
}
.zmdi-airline-seat-legroom-normal:before {
  content: '\f3ce';
}
.zmdi-airline-seat-legroom-reduced:before {
  content: '\f3cf';
}
.zmdi-airline-seat-recline-extra:before {
  content: '\f3d0';
}
.zmdi-airline-seat-recline-normal:before {
  content: '\f3d1';
}
.zmdi-airplay:before {
  content: '\f3d2';
}
.zmdi-closed-caption:before {
  content: '\f3d3';
}
.zmdi-confirmation-number:before {
  content: '\f3d4';
}
.zmdi-developer-board:before {
  content: '\f3d5';
}
.zmdi-disc-full:before {
  content: '\f3d6';
}
.zmdi-explicit:before {
  content: '\f3d7';
}
.zmdi-flight-land:before {
  content: '\f3d8';
}
.zmdi-flight-takeoff:before {
  content: '\f3d9';
}
.zmdi-flip-to-back:before {
  content: '\f3da';
}
.zmdi-flip-to-front:before {
  content: '\f3db';
}
.zmdi-group-work:before {
  content: '\f3dc';
}
.zmdi-hd:before {
  content: '\f3dd';
}
.zmdi-hq:before {
  content: '\f3de';
}
.zmdi-markunread-mailbox:before {
  content: '\f3df';
}
.zmdi-memory:before {
  content: '\f3e0';
}
.zmdi-nfc:before {
  content: '\f3e1';
}
.zmdi-play-for-work:before {
  content: '\f3e2';
}
.zmdi-power-input:before {
  content: '\f3e3';
}
.zmdi-present-to-all:before {
  content: '\f3e4';
}
.zmdi-satellite:before {
  content: '\f3e5';
}
.zmdi-tap-and-play:before {
  content: '\f3e6';
}
.zmdi-vibration:before {
  content: '\f3e7';
}
.zmdi-voicemail:before {
  content: '\f3e8';
}
.zmdi-group:before {
  content: '\f3e9';
}
.zmdi-rss:before {
  content: '\f3ea';
}
.zmdi-shape:before {
  content: '\f3eb';
}
.zmdi-spinner:before {
  content: '\f3ec';
}
.zmdi-ungroup:before {
  content: '\f3ed';
}
.zmdi-500px:before {
  content: '\f3ee';
}
.zmdi-8tracks:before {
  content: '\f3ef';
}
.zmdi-amazon:before {
  content: '\f3f0';
}
.zmdi-blogger:before {
  content: '\f3f1';
}
.zmdi-delicious:before {
  content: '\f3f2';
}
.zmdi-disqus:before {
  content: '\f3f3';
}
.zmdi-flattr:before {
  content: '\f3f4';
}
.zmdi-flickr:before {
  content: '\f3f5';
}
.zmdi-github-alt:before {
  content: '\f3f6';
}
.zmdi-google-old:before {
  content: '\f3f7';
}
.zmdi-linkedin:before {
  content: '\f3f8';
}
.zmdi-odnoklassniki:before {
  content: '\f3f9';
}
.zmdi-outlook:before {
  content: '\f3fa';
}
.zmdi-paypal-alt:before {
  content: '\f3fb';
}
.zmdi-pinterest:before {
  content: '\f3fc';
}
.zmdi-playstation:before {
  content: '\f3fd';
}
.zmdi-reddit:before {
  content: '\f3fe';
}
.zmdi-skype:before {
  content: '\f3ff';
}
.zmdi-slideshare:before {
  content: '\f400';
}
.zmdi-soundcloud:before {
  content: '\f401';
}
.zmdi-tumblr:before {
  content: '\f402';
}
.zmdi-twitch:before {
  content: '\f403';
}
.zmdi-vimeo:before {
  content: '\f404';
}
.zmdi-whatsapp:before {
  content: '\f405';
}
.zmdi-xbox:before {
  content: '\f406';
}
.zmdi-yahoo:before {
  content: '\f407';
}
.zmdi-youtube-play:before {
  content: '\f408';
}
.zmdi-youtube:before {
  content: '\f409';
}
.zmdi-3d-rotation:before {
  content: '\f101';
}
.zmdi-airplane-off:before {
  content: '\f102';
}
.zmdi-airplane:before {
  content: '\f103';
}
.zmdi-album:before {
  content: '\f104';
}
.zmdi-archive:before {
  content: '\f105';
}
.zmdi-assignment-account:before {
  content: '\f106';
}
.zmdi-assignment-alert:before {
  content: '\f107';
}
.zmdi-assignment-check:before {
  content: '\f108';
}
.zmdi-assignment-o:before {
  content: '\f109';
}
.zmdi-assignment-return:before {
  content: '\f10a';
}
.zmdi-assignment-returned:before {
  content: '\f10b';
}
.zmdi-assignment:before {
  content: '\f10c';
}
.zmdi-attachment-alt:before {
  content: '\f10d';
}
.zmdi-attachment:before {
  content: '\f10e';
}
.zmdi-audio:before {
  content: '\f10f';
}
.zmdi-badge-check:before {
  content: '\f110';
}
.zmdi-balance-wallet:before {
  content: '\f111';
}
.zmdi-balance:before {
  content: '\f112';
}
.zmdi-battery-alert:before {
  content: '\f113';
}
.zmdi-battery-flash:before {
  content: '\f114';
}
.zmdi-battery-unknown:before {
  content: '\f115';
}
.zmdi-battery:before {
  content: '\f116';
}
.zmdi-bike:before {
  content: '\f117';
}
.zmdi-block-alt:before {
  content: '\f118';
}
.zmdi-block:before {
  content: '\f119';
}
.zmdi-boat:before {
  content: '\f11a';
}
.zmdi-book-image:before {
  content: '\f11b';
}
.zmdi-book:before {
  content: '\f11c';
}
.zmdi-bookmark-outline:before {
  content: '\f11d';
}
.zmdi-bookmark:before {
  content: '\f11e';
}
.zmdi-brush:before {
  content: '\f11f';
}
.zmdi-bug:before {
  content: '\f120';
}
.zmdi-bus:before {
  content: '\f121';
}
.zmdi-cake:before {
  content: '\f122';
}
.zmdi-car-taxi:before {
  content: '\f123';
}
.zmdi-car-wash:before {
  content: '\f124';
}
.zmdi-car:before {
  content: '\f125';
}
.zmdi-card-giftcard:before {
  content: '\f126';
}
.zmdi-card-membership:before {
  content: '\f127';
}
.zmdi-card-travel:before {
  content: '\f128';
}
.zmdi-card:before {
  content: '\f129';
}
.zmdi-case-check:before {
  content: '\f12a';
}
.zmdi-case-download:before {
  content: '\f12b';
}
.zmdi-case-play:before {
  content: '\f12c';
}
.zmdi-case:before {
  content: '\f12d';
}
.zmdi-cast-connected:before {
  content: '\f12e';
}
.zmdi-cast:before {
  content: '\f12f';
}
.zmdi-chart-donut:before {
  content: '\f130';
}
.zmdi-chart:before {
  content: '\f131';
}
.zmdi-city-alt:before {
  content: '\f132';
}
.zmdi-city:before {
  content: '\f133';
}
.zmdi-close-circle-o:before {
  content: '\f134';
}
.zmdi-close-circle:before {
  content: '\f135';
}
.zmdi-close:before {
  content: '\f136';
}
.zmdi-cocktail:before {
  content: '\f137';
}
.zmdi-code-setting:before {
  content: '\f138';
}
.zmdi-code-smartphone:before {
  content: '\f139';
}
.zmdi-code:before {
  content: '\f13a';
}
.zmdi-coffee:before {
  content: '\f13b';
}
.zmdi-collection-bookmark:before {
  content: '\f13c';
}
.zmdi-collection-case-play:before {
  content: '\f13d';
}
.zmdi-collection-folder-image:before {
  content: '\f13e';
}
.zmdi-collection-image-o:before {
  content: '\f13f';
}
.zmdi-collection-image:before {
  content: '\f140';
}
.zmdi-collection-item-1:before {
  content: '\f141';
}
.zmdi-collection-item-2:before {
  content: '\f142';
}
.zmdi-collection-item-3:before {
  content: '\f143';
}
.zmdi-collection-item-4:before {
  content: '\f144';
}
.zmdi-collection-item-5:before {
  content: '\f145';
}
.zmdi-collection-item-6:before {
  content: '\f146';
}
.zmdi-collection-item-7:before {
  content: '\f147';
}
.zmdi-collection-item-8:before {
  content: '\f148';
}
.zmdi-collection-item-9-plus:before {
  content: '\f149';
}
.zmdi-collection-item-9:before {
  content: '\f14a';
}
.zmdi-collection-item:before {
  content: '\f14b';
}
.zmdi-collection-music:before {
  content: '\f14c';
}
.zmdi-collection-pdf:before {
  content: '\f14d';
}
.zmdi-collection-plus:before {
  content: '\f14e';
}
.zmdi-collection-speaker:before {
  content: '\f14f';
}
.zmdi-collection-text:before {
  content: '\f150';
}
.zmdi-collection-video:before {
  content: '\f151';
}
.zmdi-compass:before {
  content: '\f152';
}
.zmdi-cutlery:before {
  content: '\f153';
}
.zmdi-delete:before {
  content: '\f154';
}
.zmdi-dialpad:before {
  content: '\f155';
}
.zmdi-dns:before {
  content: '\f156';
}
.zmdi-drink:before {
  content: '\f157';
}
.zmdi-edit:before {
  content: '\f158';
}
.zmdi-email-open:before {
  content: '\f159';
}
.zmdi-email:before {
  content: '\f15a';
}
.zmdi-eye-off:before {
  content: '\f15b';
}
.zmdi-eye:before {
  content: '\f15c';
}
.zmdi-eyedropper:before {
  content: '\f15d';
}
.zmdi-favorite-outline:before {
  content: '\f15e';
}
.zmdi-favorite:before {
  content: '\f15f';
}
.zmdi-filter-list:before {
  content: '\f160';
}
.zmdi-fire:before {
  content: '\f161';
}
.zmdi-flag:before {
  content: '\f162';
}
.zmdi-flare:before {
  content: '\f163';
}
.zmdi-flash-auto:before {
  content: '\f164';
}
.zmdi-flash-off:before {
  content: '\f165';
}
.zmdi-flash:before {
  content: '\f166';
}
.zmdi-flip:before {
  content: '\f167';
}
.zmdi-flower-alt:before {
  content: '\f168';
}
.zmdi-flower:before {
  content: '\f169';
}
.zmdi-font:before {
  content: '\f16a';
}
.zmdi-fullscreen-alt:before {
  content: '\f16b';
}
.zmdi-fullscreen-exit:before {
  content: '\f16c';
}
.zmdi-fullscreen:before {
  content: '\f16d';
}
.zmdi-functions:before {
  content: '\f16e';
}
.zmdi-gas-station:before {
  content: '\f16f';
}
.zmdi-gesture:before {
  content: '\f170';
}
.zmdi-globe-alt:before {
  content: '\f171';
}
.zmdi-globe-lock:before {
  content: '\f172';
}
.zmdi-globe:before {
  content: '\f173';
}
.zmdi-graduation-cap:before {
  content: '\f174';
}
.zmdi-home:before {
  content: '\f175';
}
.zmdi-hospital-alt:before {
  content: '\f176';
}
.zmdi-hospital:before {
  content: '\f177';
}
.zmdi-hotel:before {
  content: '\f178';
}
.zmdi-hourglass-alt:before {
  content: '\f179';
}
.zmdi-hourglass-outline:before {
  content: '\f17a';
}
.zmdi-hourglass:before {
  content: '\f17b';
}
.zmdi-http:before {
  content: '\f17c';
}
.zmdi-image-alt:before {
  content: '\f17d';
}
.zmdi-image-o:before {
  content: '\f17e';
}
.zmdi-image:before {
  content: '\f17f';
}
.zmdi-inbox:before {
  content: '\f180';
}
.zmdi-invert-colors-off:before {
  content: '\f181';
}
.zmdi-invert-colors:before {
  content: '\f182';
}
.zmdi-key:before {
  content: '\f183';
}
.zmdi-label-alt-outline:before {
  content: '\f184';
}
.zmdi-label-alt:before {
  content: '\f185';
}
.zmdi-label-heart:before {
  content: '\f186';
}
.zmdi-label:before {
  content: '\f187';
}
.zmdi-labels:before {
  content: '\f188';
}
.zmdi-lamp:before {
  content: '\f189';
}
.zmdi-landscape:before {
  content: '\f18a';
}
.zmdi-layers-off:before {
  content: '\f18b';
}
.zmdi-layers:before {
  content: '\f18c';
}
.zmdi-library:before {
  content: '\f18d';
}
.zmdi-link:before {
  content: '\f18e';
}
.zmdi-lock-open:before {
  content: '\f18f';
}
.zmdi-lock-outline:before {
  content: '\f190';
}
.zmdi-lock:before {
  content: '\f191';
}
.zmdi-mail-reply-all:before {
  content: '\f192';
}
.zmdi-mail-reply:before {
  content: '\f193';
}
.zmdi-mail-send:before {
  content: '\f194';
}
.zmdi-mall:before {
  content: '\f195';
}
.zmdi-map:before {
  content: '\f196';
}
.zmdi-menu:before {
  content: '\f197';
}
.zmdi-money-box:before {
  content: '\f198';
}
.zmdi-money-off:before {
  content: '\f199';
}
.zmdi-money:before {
  content: '\f19a';
}
.zmdi-more-vert:before {
  content: '\f19b';
}
.zmdi-more:before {
  content: '\f19c';
}
.zmdi-movie-alt:before {
  content: '\f19d';
}
.zmdi-movie:before {
  content: '\f19e';
}
.zmdi-nature-people:before {
  content: '\f19f';
}
.zmdi-nature:before {
  content: '\f1a0';
}
.zmdi-navigation:before {
  content: '\f1a1';
}
.zmdi-open-in-browser:before {
  content: '\f1a2';
}
.zmdi-open-in-new:before {
  content: '\f1a3';
}
.zmdi-palette:before {
  content: '\f1a4';
}
.zmdi-parking:before {
  content: '\f1a5';
}
.zmdi-pin-account:before {
  content: '\f1a6';
}
.zmdi-pin-assistant:before {
  content: '\f1a7';
}
.zmdi-pin-drop:before {
  content: '\f1a8';
}
.zmdi-pin-help:before {
  content: '\f1a9';
}
.zmdi-pin-off:before {
  content: '\f1aa';
}
.zmdi-pin:before {
  content: '\f1ab';
}
.zmdi-pizza:before {
  content: '\f1ac';
}
.zmdi-plaster:before {
  content: '\f1ad';
}
.zmdi-power-setting:before {
  content: '\f1ae';
}
.zmdi-power:before {
  content: '\f1af';
}
.zmdi-print:before {
  content: '\f1b0';
}
.zmdi-puzzle-piece:before {
  content: '\f1b1';
}
.zmdi-quote:before {
  content: '\f1b2';
}
.zmdi-railway:before {
  content: '\f1b3';
}
.zmdi-receipt:before {
  content: '\f1b4';
}
.zmdi-refresh-alt:before {
  content: '\f1b5';
}
.zmdi-refresh-sync-alert:before {
  content: '\f1b6';
}
.zmdi-refresh-sync-off:before {
  content: '\f1b7';
}
.zmdi-refresh-sync:before {
  content: '\f1b8';
}
.zmdi-refresh:before {
  content: '\f1b9';
}
.zmdi-roller:before {
  content: '\f1ba';
}
.zmdi-ruler:before {
  content: '\f1bb';
}
.zmdi-scissors:before {
  content: '\f1bc';
}
.zmdi-screen-rotation-lock:before {
  content: '\f1bd';
}
.zmdi-screen-rotation:before {
  content: '\f1be';
}
.zmdi-search-for:before {
  content: '\f1bf';
}
.zmdi-search-in-file:before {
  content: '\f1c0';
}
.zmdi-search-in-page:before {
  content: '\f1c1';
}
.zmdi-search-replace:before {
  content: '\f1c2';
}
.zmdi-search:before {
  content: '\f1c3';
}
.zmdi-seat:before {
  content: '\f1c4';
}
.zmdi-settings-square:before {
  content: '\f1c5';
}
.zmdi-settings:before {
  content: '\f1c6';
}
.zmdi-shield-check:before {
  content: '\f1c7';
}
.zmdi-shield-security:before {
  content: '\f1c8';
}
.zmdi-shopping-basket:before {
  content: '\f1c9';
}
.zmdi-shopping-cart-plus:before {
  content: '\f1ca';
}
.zmdi-shopping-cart:before {
  content: '\f1cb';
}
.zmdi-sign-in:before {
  content: '\f1cc';
}
.zmdi-sort-amount-asc:before {
  content: '\f1cd';
}
.zmdi-sort-amount-desc:before {
  content: '\f1ce';
}
.zmdi-sort-asc:before {
  content: '\f1cf';
}
.zmdi-sort-desc:before {
  content: '\f1d0';
}
.zmdi-spellcheck:before {
  content: '\f1d1';
}
.zmdi-storage:before {
  content: '\f1d2';
}
.zmdi-store-24:before {
  content: '\f1d3';
}
.zmdi-store:before {
  content: '\f1d4';
}
.zmdi-subway:before {
  content: '\f1d5';
}
.zmdi-sun:before {
  content: '\f1d6';
}
.zmdi-tab-unselected:before {
  content: '\f1d7';
}
.zmdi-tab:before {
  content: '\f1d8';
}
.zmdi-tag-close:before {
  content: '\f1d9';
}
.zmdi-tag-more:before {
  content: '\f1da';
}
.zmdi-tag:before {
  content: '\f1db';
}
.zmdi-thumb-down:before {
  content: '\f1dc';
}
.zmdi-thumb-up-down:before {
  content: '\f1dd';
}
.zmdi-thumb-up:before {
  content: '\f1de';
}
.zmdi-ticket-star:before {
  content: '\f1df';
}
.zmdi-toll:before {
  content: '\f1e0';
}
.zmdi-toys:before {
  content: '\f1e1';
}
.zmdi-traffic:before {
  content: '\f1e2';
}
.zmdi-translate:before {
  content: '\f1e3';
}
.zmdi-triangle-down:before {
  content: '\f1e4';
}
.zmdi-triangle-up:before {
  content: '\f1e5';
}
.zmdi-truck:before {
  content: '\f1e6';
}
.zmdi-turning-sign:before {
  content: '\f1e7';
}
.zmdi-wallpaper:before {
  content: '\f1e8';
}
.zmdi-washing-machine:before {
  content: '\f1e9';
}
.zmdi-window-maximize:before {
  content: '\f1ea';
}
.zmdi-window-minimize:before {
  content: '\f1eb';
}
.zmdi-window-restore:before {
  content: '\f1ec';
}
.zmdi-wrench:before {
  content: '\f1ed';
}
.zmdi-zoom-in:before {
  content: '\f1ee';
}
.zmdi-zoom-out:before {
  content: '\f1ef';
}
.zmdi-alert-circle-o:before {
  content: '\f1f0';
}
.zmdi-alert-circle:before {
  content: '\f1f1';
}
.zmdi-alert-octagon:before {
  content: '\f1f2';
}
.zmdi-alert-polygon:before {
  content: '\f1f3';
}
.zmdi-alert-triangle:before {
  content: '\f1f4';
}
.zmdi-help-outline:before {
  content: '\f1f5';
}
.zmdi-help:before {
  content: '\f1f6';
}
.zmdi-info-outline:before {
  content: '\f1f7';
}
.zmdi-info:before {
  content: '\f1f8';
}
.zmdi-notifications-active:before {
  content: '\f1f9';
}
.zmdi-notifications-add:before {
  content: '\f1fa';
}
.zmdi-notifications-none:before {
  content: '\f1fb';
}
.zmdi-notifications-off:before {
  content: '\f1fc';
}
.zmdi-notifications-paused:before {
  content: '\f1fd';
}
.zmdi-notifications:before {
  content: '\f1fe';
}
.zmdi-account-add:before {
  content: '\f1ff';
}
.zmdi-account-box-mail:before {
  content: '\f200';
}
.zmdi-account-box-o:before {
  content: '\f201';
}
.zmdi-account-box-phone:before {
  content: '\f202';
}
.zmdi-account-box:before {
  content: '\f203';
}
.zmdi-account-calendar:before {
  content: '\f204';
}
.zmdi-account-circle:before {
  content: '\f205';
}
.zmdi-account-o:before {
  content: '\f206';
}
.zmdi-account:before {
  content: '\f207';
}
.zmdi-accounts-add:before {
  content: '\f208';
}
.zmdi-accounts-alt:before {
  content: '\f209';
}
.zmdi-accounts-list-alt:before {
  content: '\f20a';
}
.zmdi-accounts-list:before {
  content: '\f20b';
}
.zmdi-accounts-outline:before {
  content: '\f20c';
}
.zmdi-accounts:before {
  content: '\f20d';
}
.zmdi-face:before {
  content: '\f20e';
}
.zmdi-female:before {
  content: '\f20f';
}
.zmdi-male-alt:before {
  content: '\f210';
}
.zmdi-male-female:before {
  content: '\f211';
}
.zmdi-male:before {
  content: '\f212';
}
.zmdi-mood-bad:before {
  content: '\f213';
}
.zmdi-mood:before {
  content: '\f214';
}
.zmdi-run:before {
  content: '\f215';
}
.zmdi-walk:before {
  content: '\f216';
}
.zmdi-cloud-box:before {
  content: '\f217';
}
.zmdi-cloud-circle:before {
  content: '\f218';
}
.zmdi-cloud-done:before {
  content: '\f219';
}
.zmdi-cloud-download:before {
  content: '\f21a';
}
.zmdi-cloud-off:before {
  content: '\f21b';
}
.zmdi-cloud-outline-alt:before {
  content: '\f21c';
}
.zmdi-cloud-outline:before {
  content: '\f21d';
}
.zmdi-cloud-upload:before {
  content: '\f21e';
}
.zmdi-cloud:before {
  content: '\f21f';
}
.zmdi-download:before {
  content: '\f220';
}
.zmdi-file-plus:before {
  content: '\f221';
}
.zmdi-file-text:before {
  content: '\f222';
}
.zmdi-file:before {
  content: '\f223';
}
.zmdi-folder-outline:before {
  content: '\f224';
}
.zmdi-folder-person:before {
  content: '\f225';
}
.zmdi-folder-star-alt:before {
  content: '\f226';
}
.zmdi-folder-star:before {
  content: '\f227';
}
.zmdi-folder:before {
  content: '\f228';
}
.zmdi-gif:before {
  content: '\f229';
}
.zmdi-upload:before {
  content: '\f22a';
}
.zmdi-border-all:before {
  content: '\f22b';
}
.zmdi-border-bottom:before {
  content: '\f22c';
}
.zmdi-border-clear:before {
  content: '\f22d';
}
.zmdi-border-color:before {
  content: '\f22e';
}
.zmdi-border-horizontal:before {
  content: '\f22f';
}
.zmdi-border-inner:before {
  content: '\f230';
}
.zmdi-border-left:before {
  content: '\f231';
}
.zmdi-border-outer:before {
  content: '\f232';
}
.zmdi-border-right:before {
  content: '\f233';
}
.zmdi-border-style:before {
  content: '\f234';
}
.zmdi-border-top:before {
  content: '\f235';
}
.zmdi-border-vertical:before {
  content: '\f236';
}
.zmdi-copy:before {
  content: '\f237';
}
.zmdi-crop:before {
  content: '\f238';
}
.zmdi-format-align-center:before {
  content: '\f239';
}
.zmdi-format-align-justify:before {
  content: '\f23a';
}
.zmdi-format-align-left:before {
  content: '\f23b';
}
.zmdi-format-align-right:before {
  content: '\f23c';
}
.zmdi-format-bold:before {
  content: '\f23d';
}
.zmdi-format-clear-all:before {
  content: '\f23e';
}
.zmdi-format-clear:before {
  content: '\f23f';
}
.zmdi-format-color-fill:before {
  content: '\f240';
}
.zmdi-format-color-reset:before {
  content: '\f241';
}
.zmdi-format-color-text:before {
  content: '\f242';
}
.zmdi-format-indent-decrease:before {
  content: '\f243';
}
.zmdi-format-indent-increase:before {
  content: '\f244';
}
.zmdi-format-italic:before {
  content: '\f245';
}
.zmdi-format-line-spacing:before {
  content: '\f246';
}
.zmdi-format-list-bulleted:before {
  content: '\f247';
}
.zmdi-format-list-numbered:before {
  content: '\f248';
}
.zmdi-format-ltr:before {
  content: '\f249';
}
.zmdi-format-rtl:before {
  content: '\f24a';
}
.zmdi-format-size:before {
  content: '\f24b';
}
.zmdi-format-strikethrough-s:before {
  content: '\f24c';
}
.zmdi-format-strikethrough:before {
  content: '\f24d';
}
.zmdi-format-subject:before {
  content: '\f24e';
}
.zmdi-format-underlined:before {
  content: '\f24f';
}
.zmdi-format-valign-bottom:before {
  content: '\f250';
}
.zmdi-format-valign-center:before {
  content: '\f251';
}
.zmdi-format-valign-top:before {
  content: '\f252';
}
.zmdi-redo:before {
  content: '\f253';
}
.zmdi-select-all:before {
  content: '\f254';
}
.zmdi-space-bar:before {
  content: '\f255';
}
.zmdi-text-format:before {
  content: '\f256';
}
.zmdi-transform:before {
  content: '\f257';
}
.zmdi-undo:before {
  content: '\f258';
}
.zmdi-wrap-text:before {
  content: '\f259';
}
.zmdi-comment-alert:before {
  content: '\f25a';
}
.zmdi-comment-alt-text:before {
  content: '\f25b';
}
.zmdi-comment-alt:before {
  content: '\f25c';
}
.zmdi-comment-edit:before {
  content: '\f25d';
}
.zmdi-comment-image:before {
  content: '\f25e';
}
.zmdi-comment-list:before {
  content: '\f25f';
}
.zmdi-comment-more:before {
  content: '\f260';
}
.zmdi-comment-outline:before {
  content: '\f261';
}
.zmdi-comment-text-alt:before {
  content: '\f262';
}
.zmdi-comment-text:before {
  content: '\f263';
}
.zmdi-comment-video:before {
  content: '\f264';
}
.zmdi-comment:before {
  content: '\f265';
}
.zmdi-comments:before {
  content: '\f266';
}
.zmdi-check-all:before {
  content: '\f267';
}
.zmdi-check-circle-u:before {
  content: '\f268';
}
.zmdi-check-circle:before {
  content: '\f269';
}
.zmdi-check-square:before {
  content: '\f26a';
}
.zmdi-check:before {
  content: '\f26b';
}
.zmdi-circle-o:before {
  content: '\f26c';
}
.zmdi-circle:before {
  content: '\f26d';
}
.zmdi-dot-circle-alt:before {
  content: '\f26e';
}
.zmdi-dot-circle:before {
  content: '\f26f';
}
.zmdi-minus-circle-outline:before {
  content: '\f270';
}
.zmdi-minus-circle:before {
  content: '\f271';
}
.zmdi-minus-square:before {
  content: '\f272';
}
.zmdi-minus:before {
  content: '\f273';
}
.zmdi-plus-circle-o-duplicate:before {
  content: '\f274';
}
.zmdi-plus-circle-o:before {
  content: '\f275';
}
.zmdi-plus-circle:before {
  content: '\f276';
}
.zmdi-plus-square:before {
  content: '\f277';
}
.zmdi-plus:before {
  content: '\f278';
}
.zmdi-square-o:before {
  content: '\f279';
}
.zmdi-star-circle:before {
  content: '\f27a';
}
.zmdi-star-half:before {
  content: '\f27b';
}
.zmdi-star-outline:before {
  content: '\f27c';
}
.zmdi-star:before {
  content: '\f27d';
}
.zmdi-bluetooth-connected:before {
  content: '\f27e';
}
.zmdi-bluetooth-off:before {
  content: '\f27f';
}
.zmdi-bluetooth-search:before {
  content: '\f280';
}
.zmdi-bluetooth-setting:before {
  content: '\f281';
}
.zmdi-bluetooth:before {
  content: '\f282';
}
.zmdi-camera-add:before {
  content: '\f283';
}
.zmdi-camera-alt:before {
  content: '\f284';
}
.zmdi-camera-bw:before {
  content: '\f285';
}
.zmdi-camera-front:before {
  content: '\f286';
}
.zmdi-camera-mic:before {
  content: '\f287';
}
.zmdi-camera-party-mode:before {
  content: '\f288';
}
.zmdi-camera-rear:before {
  content: '\f289';
}
.zmdi-camera-roll:before {
  content: '\f28a';
}
.zmdi-camera-switch:before {
  content: '\f28b';
}
.zmdi-camera:before {
  content: '\f28c';
}
.zmdi-card-alert:before {
  content: '\f28d';
}
.zmdi-card-off:before {
  content: '\f28e';
}
.zmdi-card-sd:before {
  content: '\f28f';
}
.zmdi-card-sim:before {
  content: '\f290';
}
.zmdi-desktop-mac:before {
  content: '\f291';
}
.zmdi-desktop-windows:before {
  content: '\f292';
}
.zmdi-device-hub:before {
  content: '\f293';
}
.zmdi-devices-off:before {
  content: '\f294';
}
.zmdi-devices:before {
  content: '\f295';
}
.zmdi-dock:before {
  content: '\f296';
}
.zmdi-floppy:before {
  content: '\f297';
}
.zmdi-gamepad:before {
  content: '\f298';
}
.zmdi-gps-dot:before {
  content: '\f299';
}
.zmdi-gps-off:before {
  content: '\f29a';
}
.zmdi-gps:before {
  content: '\f29b';
}
.zmdi-headset-mic:before {
  content: '\f29c';
}
.zmdi-headset:before {
  content: '\f29d';
}
.zmdi-input-antenna:before {
  content: '\f29e';
}
.zmdi-input-composite:before {
  content: '\f29f';
}
.zmdi-input-hdmi:before {
  content: '\f2a0';
}
.zmdi-input-power:before {
  content: '\f2a1';
}
.zmdi-input-svideo:before {
  content: '\f2a2';
}
.zmdi-keyboard-hide:before {
  content: '\f2a3';
}
.zmdi-keyboard:before {
  content: '\f2a4';
}
.zmdi-laptop-chromebook:before {
  content: '\f2a5';
}
.zmdi-laptop-mac:before {
  content: '\f2a6';
}
.zmdi-laptop:before {
  content: '\f2a7';
}
.zmdi-mic-off:before {
  content: '\f2a8';
}
.zmdi-mic-outline:before {
  content: '\f2a9';
}
.zmdi-mic-setting:before {
  content: '\f2aa';
}
.zmdi-mic:before {
  content: '\f2ab';
}
.zmdi-mouse:before {
  content: '\f2ac';
}
.zmdi-network-alert:before {
  content: '\f2ad';
}
.zmdi-network-locked:before {
  content: '\f2ae';
}
.zmdi-network-off:before {
  content: '\f2af';
}
.zmdi-network-outline:before {
  content: '\f2b0';
}
.zmdi-network-setting:before {
  content: '\f2b1';
}
.zmdi-network:before {
  content: '\f2b2';
}
.zmdi-phone-bluetooth:before {
  content: '\f2b3';
}
.zmdi-phone-end:before {
  content: '\f2b4';
}
.zmdi-phone-forwarded:before {
  content: '\f2b5';
}
.zmdi-phone-in-talk:before {
  content: '\f2b6';
}
.zmdi-phone-locked:before {
  content: '\f2b7';
}
.zmdi-phone-missed:before {
  content: '\f2b8';
}
.zmdi-phone-msg:before {
  content: '\f2b9';
}
.zmdi-phone-paused:before {
  content: '\f2ba';
}
.zmdi-phone-ring:before {
  content: '\f2bb';
}
.zmdi-phone-setting:before {
  content: '\f2bc';
}
.zmdi-phone-sip:before {
  content: '\f2bd';
}
.zmdi-phone:before {
  content: '\f2be';
}
.zmdi-portable-wifi-changes:before {
  content: '\f2bf';
}
.zmdi-portable-wifi-off:before {
  content: '\f2c0';
}
.zmdi-portable-wifi:before {
  content: '\f2c1';
}
.zmdi-radio:before {
  content: '\f2c2';
}
.zmdi-reader:before {
  content: '\f2c3';
}
.zmdi-remote-control-alt:before {
  content: '\f2c4';
}
.zmdi-remote-control:before {
  content: '\f2c5';
}
.zmdi-router:before {
  content: '\f2c6';
}
.zmdi-scanner:before {
  content: '\f2c7';
}
.zmdi-smartphone-android:before {
  content: '\f2c8';
}
.zmdi-smartphone-download:before {
  content: '\f2c9';
}
.zmdi-smartphone-erase:before {
  content: '\f2ca';
}
.zmdi-smartphone-info:before {
  content: '\f2cb';
}
.zmdi-smartphone-iphone:before {
  content: '\f2cc';
}
.zmdi-smartphone-landscape-lock:before {
  content: '\f2cd';
}
.zmdi-smartphone-landscape:before {
  content: '\f2ce';
}
.zmdi-smartphone-lock:before {
  content: '\f2cf';
}
.zmdi-smartphone-portrait-lock:before {
  content: '\f2d0';
}
.zmdi-smartphone-ring:before {
  content: '\f2d1';
}
.zmdi-smartphone-setting:before {
  content: '\f2d2';
}
.zmdi-smartphone-setup:before {
  content: '\f2d3';
}
.zmdi-smartphone:before {
  content: '\f2d4';
}
.zmdi-speaker:before {
  content: '\f2d5';
}
.zmdi-tablet-android:before {
  content: '\f2d6';
}
.zmdi-tablet-mac:before {
  content: '\f2d7';
}
.zmdi-tablet:before {
  content: '\f2d8';
}
.zmdi-tv-alt-play:before {
  content: '\f2d9';
}
.zmdi-tv-list:before {
  content: '\f2da';
}
.zmdi-tv-play:before {
  content: '\f2db';
}
.zmdi-tv:before {
  content: '\f2dc';
}
.zmdi-usb:before {
  content: '\f2dd';
}
.zmdi-videocam-off:before {
  content: '\f2de';
}
.zmdi-videocam-switch:before {
  content: '\f2df';
}
.zmdi-videocam:before {
  content: '\f2e0';
}
.zmdi-watch:before {
  content: '\f2e1';
}
.zmdi-wifi-alt-2:before {
  content: '\f2e2';
}
.zmdi-wifi-alt:before {
  content: '\f2e3';
}
.zmdi-wifi-info:before {
  content: '\f2e4';
}
.zmdi-wifi-lock:before {
  content: '\f2e5';
}
.zmdi-wifi-off:before {
  content: '\f2e6';
}
.zmdi-wifi-outline:before {
  content: '\f2e7';
}
.zmdi-wifi:before {
  content: '\f2e8';
}
.zmdi-arrow-left-bottom:before {
  content: '\f2e9';
}
.zmdi-arrow-left:before {
  content: '\f2ea';
}
.zmdi-arrow-merge:before {
  content: '\f2eb';
}
.zmdi-arrow-missed:before {
  content: '\f2ec';
}
.zmdi-arrow-right-top:before {
  content: '\f2ed';
}
.zmdi-arrow-right:before {
  content: '\f2ee';
}
.zmdi-arrow-split:before {
  content: '\f2ef';
}
.zmdi-arrows:before {
  content: '\f2f0';
}
.zmdi-caret-down-circle:before {
  content: '\f2f1';
}
.zmdi-caret-down:before {
  content: '\f2f2';
}
.zmdi-caret-left-circle:before {
  content: '\f2f3';
}
.zmdi-caret-left:before {
  content: '\f2f4';
}
.zmdi-caret-right-circle:before {
  content: '\f2f5';
}
.zmdi-caret-right:before {
  content: '\f2f6';
}
.zmdi-caret-up-circle:before {
  content: '\f2f7';
}
.zmdi-caret-up:before {
  content: '\f2f8';
}
.zmdi-chevron-down:before {
  content: '\f2f9';
}
.zmdi-chevron-left:before {
  content: '\f2fa';
}
.zmdi-chevron-right:before {
  content: '\f2fb';
}
.zmdi-chevron-up:before {
  content: '\f2fc';
}
.zmdi-forward:before {
  content: '\f2fd';
}
.zmdi-long-arrow-down:before {
  content: '\f2fe';
}
.zmdi-long-arrow-left:before {
  content: '\f2ff';
}
.zmdi-long-arrow-return:before {
  content: '\f300';
}
.zmdi-long-arrow-right:before {
  content: '\f301';
}
.zmdi-long-arrow-tab:before {
  content: '\f302';
}
.zmdi-long-arrow-up:before {
  content: '\f303';
}
.zmdi-rotate-ccw:before {
  content: '\f304';
}
.zmdi-rotate-cw:before {
  content: '\f305';
}
.zmdi-rotate-left:before {
  content: '\f306';
}
.zmdi-rotate-right:before {
  content: '\f307';
}
.zmdi-square-down:before {
  content: '\f308';
}
.zmdi-square-right:before {
  content: '\f309';
}
.zmdi-swap-alt:before {
  content: '\f30a';
}
.zmdi-swap-vertical-circle:before {
  content: '\f30b';
}
.zmdi-swap-vertical:before {
  content: '\f30c';
}
.zmdi-swap:before {
  content: '\f30d';
}
.zmdi-trending-down:before {
  content: '\f30e';
}
.zmdi-trending-flat:before {
  content: '\f30f';
}
.zmdi-trending-up:before {
  content: '\f310';
}
.zmdi-unfold-less:before {
  content: '\f311';
}
.zmdi-unfold-more:before {
  content: '\f312';
}
.zmdi-apps:before {
  content: '\f313';
}
.zmdi-grid-off:before {
  content: '\f314';
}
.zmdi-grid:before {
  content: '\f315';
}
.zmdi-view-agenda:before {
  content: '\f316';
}
.zmdi-view-array:before {
  content: '\f317';
}
.zmdi-view-carousel:before {
  content: '\f318';
}
.zmdi-view-column:before {
  content: '\f319';
}
.zmdi-view-comfy:before {
  content: '\f31a';
}
.zmdi-view-compact:before {
  content: '\f31b';
}
.zmdi-view-dashboard:before {
  content: '\f31c';
}
.zmdi-view-day:before {
  content: '\f31d';
}
.zmdi-view-headline:before {
  content: '\f31e';
}
.zmdi-view-list-alt:before {
  content: '\f31f';
}
.zmdi-view-list:before {
  content: '\f320';
}
.zmdi-view-module:before {
  content: '\f321';
}
.zmdi-view-quilt:before {
  content: '\f322';
}
.zmdi-view-stream:before {
  content: '\f323';
}
.zmdi-view-subtitles:before {
  content: '\f324';
}
.zmdi-view-toc:before {
  content: '\f325';
}
.zmdi-view-web:before {
  content: '\f326';
}
.zmdi-view-week:before {
  content: '\f327';
}
.zmdi-widgets:before {
  content: '\f328';
}
.zmdi-alarm-check:before {
  content: '\f329';
}
.zmdi-alarm-off:before {
  content: '\f32a';
}
.zmdi-alarm-plus:before {
  content: '\f32b';
}
.zmdi-alarm-snooze:before {
  content: '\f32c';
}
.zmdi-alarm:before {
  content: '\f32d';
}
.zmdi-calendar-alt:before {
  content: '\f32e';
}
.zmdi-calendar-check:before {
  content: '\f32f';
}
.zmdi-calendar-close:before {
  content: '\f330';
}
.zmdi-calendar-note:before {
  content: '\f331';
}
.zmdi-calendar:before {
  content: '\f332';
}
.zmdi-time-countdown:before {
  content: '\f333';
}
.zmdi-time-interval:before {
  content: '\f334';
}
.zmdi-time-restore-setting:before {
  content: '\f335';
}
.zmdi-time-restore:before {
  content: '\f336';
}
.zmdi-time:before {
  content: '\f337';
}
.zmdi-timer-off:before {
  content: '\f338';
}
.zmdi-timer:before {
  content: '\f339';
}
.zmdi-android-alt:before {
  content: '\f33a';
}
.zmdi-android:before {
  content: '\f33b';
}
.zmdi-apple:before {
  content: '\f33c';
}
.zmdi-behance:before {
  content: '\f33d';
}
.zmdi-codepen:before {
  content: '\f33e';
}
.zmdi-dribbble:before {
  content: '\f33f';
}
.zmdi-dropbox:before {
  content: '\f340';
}
.zmdi-evernote:before {
  content: '\f341';
}
.zmdi-facebook-box:before {
  content: '\f342';
}
.zmdi-facebook:before {
  content: '\f343';
}
.zmdi-github-box:before {
  content: '\f344';
}
.zmdi-github:before {
  content: '\f345';
}
.zmdi-google-drive:before {
  content: '\f346';
}
.zmdi-google-earth:before {
  content: '\f347';
}
.zmdi-google-glass:before {
  content: '\f348';
}
.zmdi-google-maps:before {
  content: '\f349';
}
.zmdi-google-pages:before {
  content: '\f34a';
}
.zmdi-google-play:before {
  content: '\f34b';
}
.zmdi-google-plus-box:before {
  content: '\f34c';
}
.zmdi-google-plus:before {
  content: '\f34d';
}
.zmdi-google:before {
  content: '\f34e';
}
.zmdi-instagram:before {
  content: '\f34f';
}
.zmdi-language-css3:before {
  content: '\f350';
}
.zmdi-language-html5:before {
  content: '\f351';
}
.zmdi-language-javascript:before {
  content: '\f352';
}
.zmdi-language-python-alt:before {
  content: '\f353';
}
.zmdi-language-python:before {
  content: '\f354';
}
.zmdi-lastfm:before {
  content: '\f355';
}
.zmdi-linkedin-box:before {
  content: '\f356';
}
.zmdi-paypal:before {
  content: '\f357';
}
.zmdi-pinterest-box:before {
  content: '\f358';
}
.zmdi-pocket:before {
  content: '\f359';
}
.zmdi-polymer:before {
  content: '\f35a';
}
.zmdi-share:before {
  content: '\f35b';
}
.zmdi-stackoverflow:before {
  content: '\f35c';
}
.zmdi-steam-square:before {
  content: '\f35d';
}
.zmdi-steam:before {
  content: '\f35e';
}
.zmdi-twitter-box:before {
  content: '\f35f';
}
.zmdi-twitter:before {
  content: '\f360';
}
.zmdi-vk:before {
  content: '\f361';
}
.zmdi-wikipedia:before {
  content: '\f362';
}
.zmdi-windows:before {
  content: '\f363';
}
.zmdi-aspect-ratio-alt:before {
  content: '\f364';
}
.zmdi-aspect-ratio:before {
  content: '\f365';
}
.zmdi-blur-circular:before {
  content: '\f366';
}
.zmdi-blur-linear:before {
  content: '\f367';
}
.zmdi-blur-off:before {
  content: '\f368';
}
.zmdi-blur:before {
  content: '\f369';
}
.zmdi-brightness-2:before {
  content: '\f36a';
}
.zmdi-brightness-3:before {
  content: '\f36b';
}
.zmdi-brightness-4:before {
  content: '\f36c';
}
.zmdi-brightness-5:before {
  content: '\f36d';
}
.zmdi-brightness-6:before {
  content: '\f36e';
}
.zmdi-brightness-7:before {
  content: '\f36f';
}
.zmdi-brightness-auto:before {
  content: '\f370';
}
.zmdi-brightness-setting:before {
  content: '\f371';
}
.zmdi-broken-image:before {
  content: '\f372';
}
.zmdi-center-focus-strong:before {
  content: '\f373';
}
.zmdi-center-focus-weak:before {
  content: '\f374';
}
.zmdi-compare:before {
  content: '\f375';
}
.zmdi-crop-16-9:before {
  content: '\f376';
}
.zmdi-crop-3-2:before {
  content: '\f377';
}
.zmdi-crop-5-4:before {
  content: '\f378';
}
.zmdi-crop-7-5:before {
  content: '\f379';
}
.zmdi-crop-din:before {
  content: '\f37a';
}
.zmdi-crop-free:before {
  content: '\f37b';
}
.zmdi-crop-landscape:before {
  content: '\f37c';
}
.zmdi-crop-portrait:before {
  content: '\f37d';
}
.zmdi-crop-square:before {
  content: '\f37e';
}
.zmdi-exposure-alt:before {
  content: '\f37f';
}
.zmdi-exposure:before {
  content: '\f380';
}
.zmdi-filter-b-and-w:before {
  content: '\f381';
}
.zmdi-filter-center-focus:before {
  content: '\f382';
}
.zmdi-filter-frames:before {
  content: '\f383';
}
.zmdi-filter-tilt-shift:before {
  content: '\f384';
}
.zmdi-gradient:before {
  content: '\f385';
}
.zmdi-grain:before {
  content: '\f386';
}
.zmdi-graphic-eq:before {
  content: '\f387';
}
.zmdi-hdr-off:before {
  content: '\f388';
}
.zmdi-hdr-strong:before {
  content: '\f389';
}
.zmdi-hdr-weak:before {
  content: '\f38a';
}
.zmdi-hdr:before {
  content: '\f38b';
}
.zmdi-iridescent:before {
  content: '\f38c';
}
.zmdi-leak-off:before {
  content: '\f38d';
}
.zmdi-leak:before {
  content: '\f38e';
}
.zmdi-looks:before {
  content: '\f38f';
}
.zmdi-loupe:before {
  content: '\f390';
}
.zmdi-panorama-horizontal:before {
  content: '\f391';
}
.zmdi-panorama-vertical:before {
  content: '\f392';
}
.zmdi-panorama-wide-angle:before {
  content: '\f393';
}
.zmdi-photo-size-select-large:before {
  content: '\f394';
}
.zmdi-photo-size-select-small:before {
  content: '\f395';
}
.zmdi-picture-in-picture:before {
  content: '\f396';
}
.zmdi-slideshow:before {
  content: '\f397';
}
.zmdi-texture:before {
  content: '\f398';
}
.zmdi-tonality:before {
  content: '\f399';
}
.zmdi-vignette:before {
  content: '\f39a';
}
.zmdi-wb-auto:before {
  content: '\f39b';
}
.zmdi-eject-alt:before {
  content: '\f39c';
}
.zmdi-eject:before {
  content: '\f39d';
}
.zmdi-equalizer:before {
  content: '\f39e';
}
.zmdi-fast-forward:before {
  content: '\f39f';
}
.zmdi-fast-rewind:before {
  content: '\f3a0';
}
.zmdi-forward-10:before {
  content: '\f3a1';
}
.zmdi-forward-30:before {
  content: '\f3a2';
}
.zmdi-forward-5:before {
  content: '\f3a3';
}
.zmdi-hearing:before {
  content: '\f3a4';
}
.zmdi-pause-circle-outline:before {
  content: '\f3a5';
}
.zmdi-pause-circle:before {
  content: '\f3a6';
}
.zmdi-pause:before {
  content: '\f3a7';
}
.zmdi-play-circle-outline:before {
  content: '\f3a8';
}
.zmdi-play-circle:before {
  content: '\f3a9';
}
.zmdi-play:before {
  content: '\f3aa';
}
.zmdi-playlist-audio:before {
  content: '\f3ab';
}
.zmdi-playlist-plus:before {
  content: '\f3ac';
}
.zmdi-repeat-one:before {
  content: '\f3ad';
}
.zmdi-repeat:before {
  content: '\f3ae';
}
.zmdi-replay-10:before {
  content: '\f3af';
}
.zmdi-replay-30:before {
  content: '\f3b0';
}
.zmdi-replay-5:before {
  content: '\f3b1';
}
.zmdi-replay:before {
  content: '\f3b2';
}
.zmdi-shuffle:before {
  content: '\f3b3';
}
.zmdi-skip-next:before {
  content: '\f3b4';
}
.zmdi-skip-previous:before {
  content: '\f3b5';
}
.zmdi-stop:before {
  content: '\f3b6';
}
.zmdi-surround-sound:before {
  content: '\f3b7';
}
.zmdi-tune:before {
  content: '\f3b8';
}
.zmdi-volume-down:before {
  content: '\f3b9';
}
.zmdi-volume-mute:before {
  content: '\f3ba';
}
.zmdi-volume-off:before {
  content: '\f3bb';
}
.zmdi-volume-up:before {
  content: '\f3bc';
}
.zmdi-n-1-square:before {
  content: '\f3bd';
}
.zmdi-n-2-square:before {
  content: '\f3be';
}
.zmdi-n-3-square:before {
  content: '\f3bf';
}
.zmdi-n-4-square:before {
  content: '\f3c0';
}
.zmdi-n-5-square:before {
  content: '\f3c1';
}
.zmdi-n-6-square:before {
  content: '\f3c2';
}
.zmdi-neg-1:before {
  content: '\f3c3';
}
.zmdi-neg-2:before {
  content: '\f3c4';
}
.zmdi-plus-1:before {
  content: '\f3c5';
}
.zmdi-plus-2:before {
  content: '\f3c6';
}
.zmdi-sec-10:before {
  content: '\f3c7';
}
.zmdi-sec-3:before {
  content: '\f3c8';
}
.zmdi-zero:before {
  content: '\f3c9';
}
.zmdi-airline-seat-flat-angled:before {
  content: '\f3ca';
}
.zmdi-airline-seat-flat:before {
  content: '\f3cb';
}
.zmdi-airline-seat-individual-suite:before {
  content: '\f3cc';
}
.zmdi-airline-seat-legroom-extra:before {
  content: '\f3cd';
}
.zmdi-airline-seat-legroom-normal:before {
  content: '\f3ce';
}
.zmdi-airline-seat-legroom-reduced:before {
  content: '\f3cf';
}
.zmdi-airline-seat-recline-extra:before {
  content: '\f3d0';
}
.zmdi-airline-seat-recline-normal:before {
  content: '\f3d1';
}
.zmdi-airplay:before {
  content: '\f3d2';
}
.zmdi-closed-caption:before {
  content: '\f3d3';
}
.zmdi-confirmation-number:before {
  content: '\f3d4';
}
.zmdi-developer-board:before {
  content: '\f3d5';
}
.zmdi-disc-full:before {
  content: '\f3d6';
}
.zmdi-explicit:before {
  content: '\f3d7';
}
.zmdi-flight-land:before {
  content: '\f3d8';
}
.zmdi-flight-takeoff:before {
  content: '\f3d9';
}
.zmdi-flip-to-back:before {
  content: '\f3da';
}
.zmdi-flip-to-front:before {
  content: '\f3db';
}
.zmdi-group-work:before {
  content: '\f3dc';
}
.zmdi-hd:before {
  content: '\f3dd';
}
.zmdi-hq:before {
  content: '\f3de';
}
.zmdi-markunread-mailbox:before {
  content: '\f3df';
}
.zmdi-memory:before {
  content: '\f3e0';
}
.zmdi-nfc:before {
  content: '\f3e1';
}
.zmdi-play-for-work:before {
  content: '\f3e2';
}
.zmdi-power-input:before {
  content: '\f3e3';
}
.zmdi-present-to-all:before {
  content: '\f3e4';
}
.zmdi-satellite:before {
  content: '\f3e5';
}
.zmdi-tap-and-play:before {
  content: '\f3e6';
}
.zmdi-vibration:before {
  content: '\f3e7';
}
.zmdi-voicemail:before {
  content: '\f3e8';
}
.zmdi-group:before {
  content: '\f3e9';
}
.zmdi-rss:before {
  content: '\f3ea';
}
.zmdi-shape:before {
  content: '\f3eb';
}
.zmdi-spinner:before {
  content: '\f3ec';
}
.zmdi-ungroup:before {
  content: '\f3ed';
}
.zmdi-500px:before {
  content: '\f3ee';
}
.zmdi-8tracks:before {
  content: '\f3ef';
}
.zmdi-amazon:before {
  content: '\f3f0';
}
.zmdi-blogger:before {
  content: '\f3f1';
}
.zmdi-delicious:before {
  content: '\f3f2';
}
.zmdi-disqus:before {
  content: '\f3f3';
}
.zmdi-flattr:before {
  content: '\f3f4';
}
.zmdi-flickr:before {
  content: '\f3f5';
}
.zmdi-github-alt:before {
  content: '\f3f6';
}
.zmdi-google-old:before {
  content: '\f3f7';
}
.zmdi-linkedin:before {
  content: '\f3f8';
}
.zmdi-odnoklassniki:before {
  content: '\f3f9';
}
.zmdi-outlook:before {
  content: '\f3fa';
}
.zmdi-paypal-alt:before {
  content: '\f3fb';
}
.zmdi-pinterest:before {
  content: '\f3fc';
}
.zmdi-playstation:before {
  content: '\f3fd';
}
.zmdi-reddit:before {
  content: '\f3fe';
}
.zmdi-skype:before {
  content: '\f3ff';
}
.zmdi-slideshare:before {
  content: '\f400';
}
.zmdi-soundcloud:before {
  content: '\f401';
}
.zmdi-tumblr:before {
  content: '\f402';
}
.zmdi-twitch:before {
  content: '\f403';
}
.zmdi-vimeo:before {
  content: '\f404';
}
.zmdi-whatsapp:before {
  content: '\f405';
}
.zmdi-xbox:before {
  content: '\f406';
}
.zmdi-yahoo:before {
  content: '\f407';
}
.zmdi-youtube-play:before {
  content: '\f408';
}
.zmdi-youtube:before {
  content: '\f409';
}
.zmdi-import-export:before {
  content: '\f30c';
}
.zmdi-swap-vertical-:before {
  content: '\f30c';
}
.zmdi-airplanemode-inactive:before {
  content: '\f102';
}
.zmdi-airplanemode-active:before {
  content: '\f103';
}
.zmdi-rate-review:before {
  content: '\f103';
}
.zmdi-comment-sign:before {
  content: '\f25a';
}
.zmdi-network-warning:before {
  content: '\f2ad';
}
.zmdi-shopping-cart-add:before {
  content: '\f1ca';
}
.zmdi-file-add:before {
  content: '\f221';
}
.zmdi-network-wifi-scan:before {
  content: '\f2e4';
}
.zmdi-collection-add:before {
  content: '\f14e';
}
.zmdi-format-playlist-add:before {
  content: '\f3ac';
}
.zmdi-format-queue-music:before {
  content: '\f3ab';
}
.zmdi-plus-box:before {
  content: '\f277';
}
.zmdi-tag-backspace:before {
  content: '\f1d9';
}
.zmdi-alarm-add:before {
  content: '\f32b';
}
.zmdi-battery-charging:before {
  content: '\f114';
}
.zmdi-daydream-setting:before {
  content: '\f217';
}
.zmdi-more-horiz:before {
  content: '\f19c';
}
.zmdi-book-photo:before {
  content: '\f11b';
}
.zmdi-incandescent:before {
  content: '\f189';
}
.zmdi-wb-iridescent:before {
  content: '\f38c';
}
.zmdi-calendar-remove:before {
  content: '\f330';
}
.zmdi-refresh-sync-disabled:before {
  content: '\f1b7';
}
.zmdi-refresh-sync-problem:before {
  content: '\f1b6';
}
.zmdi-crop-original:before {
  content: '\f17e';
}
.zmdi-power-off:before {
  content: '\f1af';
}
.zmdi-power-off-setting:before {
  content: '\f1ae';
}
.zmdi-leak-remove:before {
  content: '\f38d';
}
.zmdi-star-border:before {
  content: '\f27c';
}
.zmdi-brightness-low:before {
  content: '\f36d';
}
.zmdi-brightness-medium:before {
  content: '\f36e';
}
.zmdi-brightness-high:before {
  content: '\f36f';
}
.zmdi-smartphone-portrait:before {
  content: '\f2d4';
}
.zmdi-live-tv:before {
  content: '\f2d9';
}
.zmdi-format-textdirection-l-to-r:before {
  content: '\f249';
}
.zmdi-format-textdirection-r-to-l:before {
  content: '\f24a';
}
.zmdi-arrow-back:before {
  content: '\f2ea';
}
.zmdi-arrow-forward:before {
  content: '\f2ee';
}
.zmdi-arrow-in:before {
  content: '\f2e9';
}
.zmdi-arrow-out:before {
  content: '\f2ed';
}
.zmdi-rotate-90-degrees-ccw:before {
  content: '\f304';
}
.zmdi-adb:before {
  content: '\f33a';
}
.zmdi-network-wifi:before {
  content: '\f2e8';
}
.zmdi-network-wifi-alt:before {
  content: '\f2e3';
}
.zmdi-network-wifi-lock:before {
  content: '\f2e5';
}
.zmdi-network-wifi-off:before {
  content: '\f2e6';
}
.zmdi-network-wifi-outline:before {
  content: '\f2e7';
}
.zmdi-network-wifi-info:before {
  content: '\f2e4';
}
.zmdi-layers-clear:before {
  content: '\f18b';
}
.zmdi-colorize:before {
  content: '\f15d';
}
.zmdi-format-paint:before {
  content: '\f1ba';
}
.zmdi-format-quote:before {
  content: '\f1b2';
}
.zmdi-camera-monochrome-photos:before {
  content: '\f285';
}
.zmdi-sort-by-alpha:before {
  content: '\f1cf';
}
.zmdi-folder-shared:before {
  content: '\f225';
}
.zmdi-folder-special:before {
  content: '\f226';
}
.zmdi-comment-dots:before {
  content: '\f260';
}
.zmdi-reorder:before {
  content: '\f31e';
}
.zmdi-dehaze:before {
  content: '\f197';
}
.zmdi-sort:before {
  content: '\f1ce';
}
.zmdi-pages:before {
  content: '\f34a';
}
.zmdi-stack-overflow:before {
  content: '\f35c';
}
.zmdi-calendar-account:before {
  content: '\f204';
}
.zmdi-paste:before {
  content: '\f109';
}
.zmdi-cut:before {
  content: '\f1bc';
}
.zmdi-save:before {
  content: '\f297';
}
.zmdi-smartphone-code:before {
  content: '\f139';
}
.zmdi-directions-bike:before {
  content: '\f117';
}
.zmdi-directions-boat:before {
  content: '\f11a';
}
.zmdi-directions-bus:before {
  content: '\f121';
}
.zmdi-directions-car:before {
  content: '\f125';
}
.zmdi-directions-railway:before {
  content: '\f1b3';
}
.zmdi-directions-run:before {
  content: '\f215';
}
.zmdi-directions-subway:before {
  content: '\f1d5';
}
.zmdi-directions-walk:before {
  content: '\f216';
}
.zmdi-local-hotel:before {
  content: '\f178';
}
.zmdi-local-activity:before {
  content: '\f1df';
}
.zmdi-local-play:before {
  content: '\f1df';
}
.zmdi-local-airport:before {
  content: '\f103';
}
.zmdi-local-atm:before {
  content: '\f198';
}
.zmdi-local-bar:before {
  content: '\f137';
}
.zmdi-local-cafe:before {
  content: '\f13b';
}
.zmdi-local-car-wash:before {
  content: '\f124';
}
.zmdi-local-convenience-store:before {
  content: '\f1d3';
}
.zmdi-local-dining:before {
  content: '\f153';
}
.zmdi-local-drink:before {
  content: '\f157';
}
.zmdi-local-florist:before {
  content: '\f168';
}
.zmdi-local-gas-station:before {
  content: '\f16f';
}
.zmdi-local-grocery-store:before {
  content: '\f1cb';
}
.zmdi-local-hospital:before {
  content: '\f177';
}
.zmdi-local-laundry-service:before {
  content: '\f1e9';
}
.zmdi-local-library:before {
  content: '\f18d';
}
.zmdi-local-mall:before {
  content: '\f195';
}
.zmdi-local-movies:before {
  content: '\f19d';
}
.zmdi-local-offer:before {
  content: '\f187';
}
.zmdi-local-parking:before {
  content: '\f1a5';
}
.zmdi-local-parking:before {
  content: '\f1a5';
}
.zmdi-local-pharmacy:before {
  content: '\f176';
}
.zmdi-local-phone:before {
  content: '\f2be';
}
.zmdi-local-pizza:before {
  content: '\f1ac';
}
.zmdi-local-post-office:before {
  content: '\f15a';
}
.zmdi-local-printshop:before {
  content: '\f1b0';
}
.zmdi-local-see:before {
  content: '\f28c';
}
.zmdi-local-shipping:before {
  content: '\f1e6';
}
.zmdi-local-store:before {
  content: '\f1d4';
}
.zmdi-local-taxi:before {
  content: '\f123';
}
.zmdi-local-wc:before {
  content: '\f211';
}
.zmdi-my-location:before {
  content: '\f299';
}
.zmdi-directions:before {
  content: '\f1e7';
}


(function ($) {
    "use strict";


     /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);


        </style>
	
	<div class="limiter">
    <form method="POST" action="{{ route('login') }}">
    @csrf
		<div class="container-login100" style="background-image: url('/assets/Login_v4/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">{{ __('E-Mail Address') }}</span>
						<input id="email" type="email" class="input100" type="text" name="email" placeholder="Type your username"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
						<span class="focus-input100" data-symbol="&#xf206;">
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">{{ __('Password') }}</span>
						<input id="password" type="password" class="input100" name="password" placeholder="Type your password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
						<span class="focus-input100" data-symbol="&#xf190;">
                        @if ($errors->has('password'))
                      <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                      </span>
                        @endif
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
                                {{ __('Login') }}                                
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</form>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>