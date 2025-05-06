<style>
    body {
            text-align: right;
         }
</style>
<?php   
include("heder.php");
?>
        
<main class="container text-right">
    <p class="bala">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="register_action.php" method="post" class="text-center">
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" name="name" id="name" placeholder="نام" class="form-control mx-auto" style="max-width: 300px;">
                        </div>
                        <div class="form-group">
                            <label for="username"></label>
                            <input type="text" name="username" id="username" placeholder="نام کاربری" class="form-control mx-auto" style="max-width: 300px;">
                        </div>
                        <div class="form-group">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" placeholder="کلمه عبور" class="form-control mx-auto" style="max-width: 300px;">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" style="max-width: 300px; margin: 0 auto;">ثبت نام</button>
                    </form>
                </div>
            </div>
        </div>  
    </p>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<?php
include("footer.html");
?>
</body>
</html>
