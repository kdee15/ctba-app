<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__users">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Add User</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="admin__users.php"><span>back</span></a></li>
                <li><a class="button" href="admin__user-add.php"><span>Add User</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
            
            <form class="form inline">

                <div class="field-item text">
                    <label for="club-name">User Name</label>
                    <input type="text" id="club-name" placeholder="e.g. John" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">User Surname</label>
                    <input type="text" id="club-name" placeholder="e.g. Appleseed" name="club-name">
                </div>
                
                <div class="field-item text">
                    <label for="user-email">User Email</label>
                    <input type="text" id="user-email" placeholder="e.g. johan@appleseed.com" name="user-email">
                </div>
                                
                <div class="field-item text">
                    <select type="text" id="role" name="role">
                        <option>Select Role</option>
                        <option>Administrator</option>
                        <option>User</option>
                    </select>
                </div>

                <div class="field-item text">
                    <select type="text" id="club" name="club">
                        <option>Select Club</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                        <option>Club Name</option>
                    </select>
                </div>

                <a href="main.php" class="button">SUBMIT</a>
                
            </form>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>