
<h1>Login</h1>
<!--
<form action="login/run" method="post">

    <label >User</label> <input type="text" name="name"><br/>
    <label>Password</label> <input type="password" name="pass"><br/>
    <input type="submit"/>

</form>-->

<div class="login-page">
    <div class="form">
       <form class="register-form" action="login/run" method="post">
            <input type="text" placeholder="name" name="name"/>
            <input type="password" placeholder="password" name="pass"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form" action="login/run" method="post" >
            <input type="text" placeholder="username" name="name"/>
            <input type="password" placeholder="password" name="pass"/>
            <button>login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>