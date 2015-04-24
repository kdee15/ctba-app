<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__leagues">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Login</h1>
            
        </section>
        
        <section class="page-body">
        
            <div class="field-item text">
                <label for="Username">Username</label>
                <input type="text" id="Username" placeholder="John" name="Username">
            </div>
        
            <div class="field-item text">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
        
            <a href="main.php" class="button">SUBMIT</a>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>