<?php include('includes/head.inc'); ?>
<?php include('includes/header.inc'); ?>
<body>
<!-- C. Main Content -->

<section id="mast" class="page__clubs">

    <div class="container">
    
        <section class="page-header">
        
            <h1>Add Player</h1>
        
            <ul class="list navigation">
        
                <li><a class="button" href="players.php"><span>back</span></a></li>
                <li><a class="button" href="player__add.php"><span>Add Player</span></a></li>

            </ul>
            
        </section>
        
        <section class="page-body">
            
            <form class="form inline">
                
                <fieldset>

                    <legend class="panel-heading">
                        Club Details
                    </legend>

                    <div>

                        <div class="panel-body">
                            
                            <div class="field-item text">
                                <label for="club-name">Club</label>
                                <select class="" id="club-details" name="club_details">
                                    <option value="" selected="selected">- Select -</option>
                                    <option value="cape_waves">Cape Waves</option>
                                    <option value="cput_panthers">CPUT Bellville Panthers</option>
                                    <option value="cput_cats">CPUT Cape Town Cats</option>
                                    <option value="dragons">Dragons</option>
                                    <option value="eagles">Eagles</option>
                                    <option value="gugulethu_hustlers">Gugulethu Hustlers</option>
                                    <option value="heideveld">Heideveld Basketball</option>
                                    <option value="hellas">Hellas</option>
                                    <option value="kulca_knights">Kulca Knights</option>
                                    <option value="langa_kings">Langa Kings</option>
                                    <option value="lethal_ladies">Lethal Ladies</option>
                                    <option value="mvbc">Montana Vikings</option>
                                    <option value="pinelands">Pinelands</option>
                                    <option value="spartans">Spartans</option>
                                    <option value="yda">Themba-Elihle YDA</option>
                                    <option value="turfall">Turfhall Primary</option>
                                    <option value="uct">UCT</option>
                                    <option value="wcss">WCSS</option>
                                </select>  
                            </div>
                            
                            <div class="field-item text">
                                <label for="club-name">League</label>
                                <select class="" id="league-details" name="league_details">
                                    <option value="" selected="selected">- Select -</option>
                                    <option value="msl">Mens Super League</option>
                                </select>
                            </div>

                            
                                
                            
                            

                        </div>

                    </div>
                    
                </fieldset>  
                
                <fieldset>

                    <legend class="panel-heading">
                        Personal Information
                    </legend>

                    <div>

                        <div class="panel-body">
                            
                            <div class="field-item text">
                                <label for="id-type">Identification Type</label>
                                <select class="" id="id-type" name="id-type">
                                    <option value="" selected="selected">- Select -</option>
                                    <option value="cape_waves">SA ID</option>
                                    <option value="cput_panthers">Passport</option>
                                </select>  
                            </div>

                            <div class="field-item text">
                                <label for="sa-id">ID No</label>
                                <input type="text" id="sa-id" placeholder="0000000000000" name="sa-id">
                            </div>
                               
                            <div class="field-item text">
                                <label for="passport">Passport No</label>
                                <input type="text" id="passport" placeholder="XX00000000" name="passport">
                            </div>
                            
                            <div class="field-item text">
                                <label for="passport_expire">Expiry Date</label>
                                <input id="passport_expire" type="datetime-local" value="2011-01-13"/>
                            </div>
                            

                        </div>

                    </div>
                    
                </fieldset>   
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

                <div class="field-item text">
                    <label for="club-name">Player Name</label>
                    <input type="text" id="club-name" placeholder="club name" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Surname</label>
                    <input type="text" id="club-name" placeholder="e.g. John Handy" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Tel</label>
                    <input type="text" id="club-name" placeholder="e.g. 080 000 000" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Fax</label>
                    <input type="text" id="club-name" placeholder="e.g. 086 000 000" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Email</label>
                    <input type="text" id="club-name" placeholder="e.g. info@clubname.co.za" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Address</label>
                    <input type="text" id="club-name" placeholder="e.g. Street" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Suburb" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Town" name="club-name">
                    <input type="text" id="club-name" placeholder="e.g. Code" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player ID/Passport</label>
                    <input type="text" id="club-name" placeholder="e.g. blue and white" name="club-name">
                </div>

                <div class="field-item text">
                    <label for="club-name">Player Date of Birth</label>
                    <input type="text" id="club-name" placeholder="e.g. white and green" name="club-name">
                </div>

                <a href="main.php" class="button">SUBMIT</a>
                
            </form>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>