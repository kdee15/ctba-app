<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__users">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Users</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="admin.php"><span>Back</span></a></li>
                <li><a class="button" href="admin__user-add.php"><span>Add User</span></a></li>

            </ul>
            
        </section>
        
        <form class="page-body">
            
            <aside class="filter grid player__filter">
                
                <div class="field-item text grid__half">
                    <input type="text" id="user-name" placeholder="Search by name" name="user-name">
                </div>

                <div class="field-item text grid__quarter">
                    <label for="team">Filter by Role</label>
                    <select type="text" id="team" name="team">
                        <option>All Users</option>
                        <option>Super Administrator</option>
                        <option>Administrator</option>
                        <option>User</option>
                    </select>
                </div>
                
            </aside>
        
            <table>
            
                <tr>
                
                    <th class="header">ID</th>
                    <th class="header">Name</th>
                    <th class="header">Surname</th>
                    <th class="header">Administrator</th>
                    <th class="header">Club</th>
                    <th class="header td__icon"></th>
                
                </tr>
                      
                <tr>
                
                    <td>1</td>
                    <td>Kirk</td>
                    <td>Daniels</td>
                    <td>
                    
                        <div class="field-item text">
                            <input type="checkbox" id="role" name="role" value="role">
                            </select>
                        </div>
                        
                    </td>
                    <td class="player__team">
                        <span>club name</span>
                        <span class="icon div-toggle" name="player-edit-1">
                            <img src="../assets/images/svg/ct-edit.svg"/>
                        </span>
                        <div class="toggle-content" id="player-edit-1">
                                <span>
                                    <div class="field-item text">
                                        <select type="text" id="team" name="team">
                                            <option>Select</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                            <option>Club Name</option>
                                        </select>
                                    </div>
                                </span>
                                <span class="icon div-toggle" name="player-edit-1">
                                    <img src="../assets/images/svg/ct-save.svg"/>
                                </span>
                                <span class="icon div-toggle" name="player-edit-1">
                                    <img src="../assets/images/svg/ct-close.svg"/>
                                </span>
                        </div>
                    </td>

                    <td class="td__icon">
                        <a class="icon" href="user__detail.php"><img src="../assets/images/svg/ct-edit.svg"/></a>
                        <a class="icon"><img src="../assets/images/svg/ct-delete.svg"/></a>
                    </td>
                
                </tr>
            
            </table>
            
        </form>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>