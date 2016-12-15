<h1>Sign In</h1>

<form action="?controller=security&action=signIn" method="post">
    <div class="form-group">
        <label for="username">
            Username
        </label>
        <input class="form-control" type="text" id="username" name="username" placeholder="Username"
               value=""/>
    </div>
    <div class="form-group">
        <label for="password">
            Password
        </label>
        <input class="form-control" type="password" id="password" name="password" placeholder="Password"/>
    </div>
    <div class="text-center">
        <input class="btn btn-primary" type="submit" value="Sign In"/>
    </div>
</form>
