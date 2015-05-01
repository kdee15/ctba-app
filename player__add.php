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
                                <label for="passport">District/Metro</label>
                                <input type="text" id="district" value="Western Cape Basketball Association" name="district">
                            </div>
                                                        
                            <div class="field-item text">
                                <label for="passport">League</label>
                                <input type="text" id="league" value="Cape Town Basketball League" name="league">
                            </div>
                            
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
                                <label for="division">Division</label>
                                <select class="" id="division" name="division">
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
                                
                                <label for="member-role">Member Role </label>
                                
                                <div class="form-type-checkbox">
                                    <input id="player" name="player" value="player" class="form-checkbox" type="checkbox">  
                                    <label for="player">Player</label>
                                </div>

                                <div class="form-type-checkbox">
                                    <input id="coach" name="coach" value="coach" class="form-checkbox" type="checkbox">  
                                    <label for="coach">Coach</label>
                                </div>
<!-- not needed here
                                <div class="form-type-checkbox">
                                    <input id="coach-instructor" name="coach-instructor" value="coach-instructor" class="form-checkbox" type="checkbox">  
                                    <label for="coach-instructor">Coach Instructor</label>
                                </div>

                                <div class="form-type-checkbox">
                                    <input id="commissioner" name="commissioner" value="commissioner" class="form-checkbox" type="checkbox">  
                                    <label for="commissioner">Commissioner</label>
                                </div>

                                <div class="form-type-checkbox">
                                    <input id="ref-instructor" name="ref-instructor" value="ref-instructor" class="form-checkbox" type="checkbox">  
                                    <label for="ref-instructor">Referee Instructor</label>
                                </div>
-->
                                <div class="form-type-checkbox">
                                    <input id="ref" name="ref" value="ref" class="form-checkbox" type="checkbox">  
                                    <label for="ref">Referee</label>
                                </div>

                                <div class="form-type-checkbox">
                                    <input id="table" name="table" value="table" class="form-checkbox" type="checkbox"> 
                                    <label for="table">Table Official</label>
                                </div>

                                <div class="form-type-checkbox">
                                    <input id="statistician" name="statistician" value="statistician" class="form-checkbox" type="checkbox">  
                                    <label for="statistician">Statistician</label>
                                </div>
                                
                            </div>

                            <div class="field-item text">
                                <label for="sa-id">Name</label>
                                <input type="text" id="sa-id" placeholder="e.g. Terence" name="sa-id">
                            </div>

                            <div class="field-item text">
                                <label for="passport">Surname</label>
                                <input type="text" id="passport" placeholder="XX00000000" name="passport">
                            </div>

                            <div class="field-item text">
                                <label for="passport_expire">date of Birth</label>
                                <input id="passport_expire" type="datetime-local" value="2011-01-13"/>
                            </div>

                            <div class="field-item text">
                                <label for="passport">Place of Birth</label>
                                <input type="text" id="passport" placeholder="XX00000000" name="passport">
                            </div>
                            
                            <div class="field-item text">
                                <label for="club-name">Gender*</label>
                                <select class="" id="league-details" name="league_details">
                                    <option value="" selected="selected">- Select -</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                            
                            <div class="field-item text">
                                <label for="passport">Weight</label>
                                <input type="text" id="passport" placeholder="XX00000000" name="passport">
                            </div>
                            
                            <div class="field-item text">
                                <label for="passport">Height</label>
                                <input type="text" id="passport" placeholder="XX00000000" name="passport">
                            </div>
                            
                            <div class="field-item text">
                                <label for="passport">Hair Colour</label>
                                <input type="text" id="passport" placeholder="XX00000000" name="passport">
                            </div>
                            
                            <div class="field-item text">
                                <label for="passport">Eye Colour</label>
                                <input type="text" id="passport" placeholder="XX00000000" name="passport">
                            </div>
                            
                            <div class="field-item text">
                                <label for="physical-address">Physical Address</label>
                                <input type="text" id="physical-address-street" placeholder="Street" name="physical-address-street">
                                <input type="text" id="physical-address-suburb" placeholder="Suburb" name="physical-address-suburb">
                                <input type="text" id="physical-address-town" placeholder="Town" name="physical-address-town">
                            </div>
                                                        
                            <div class="field-item text">
                                <label for="physical-address">Postal Address</label>
                                <input type="text" id="physical-address-street" placeholder="Street" name="physical-address-street">
                                <input type="text" id="physical-address-suburb" placeholder="Suburb" name="physical-address-suburb">
                                <input type="text" id="physical-address-town" placeholder="Town" name="physical-address-town">
                                <input type="text" id="physical-address-code" placeholder="Code" name="physical-address-code">
                            </div>
                            
                            <div class="field-item text">
                                <label for="tel">Tel Number</label>
                                <input type="text" id="tel" placeholder="0000000000" name="tel">
                            </div>
                            
                            <div class="field-item text">
                                <label for="work">Work Number</label>
                                <input type="text" id="work" placeholder="0000000000" name="work">
                            </div>
                                                        
                            <div class="field-item text">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" id="mobile" placeholder="0000000000" name="mobile">
                            </div>
                                                                                    
                            <div class="field-item text">
                                <label for="mobile">Email Address</label>
                                <input type="text" id="email" placeholder="e.g. info@ctba.co.za" name="email">
                            </div>
                                                                                                             
                            <div class="field-item text">
                                <label for="profession">Profession</label>
                                <input type="text" id="profession" name="profession">
                            </div>
                                                                                                                                         
                            <div class="field-item text">
                                <label for="company">Company/Institution</label>
                                <input type="text" id="company" name="company">
                            </div>                                                                                                             
                            <div class="field-item text">
                                <label for="medical-aid-scheme">Medical Aid Scheme</label>
                                <input type="text" id="medical-aid-scheme" name="medical-aid-scheme">
                            </div>
                                                                                                                                         
                            <div class="field-item text">
                                <label for="medical-aid-number">Medical Aid Number</label>
                                <input type="text" id="medical-aid-number" name="medical-aid-number">
                            </div>
                            
                            <div class="field-item text">
                                <label for="medical-aid-member">Principal Member</label>
                                <input type="text" id="medical-aid-member" name="medical-aid-member">
                            </div>
                            
                            <div class="field-item text">
                                <label for="father">Father's Name</label>
                                <input type="text" id="father" name="father">
                            </div>
                                                        
                            <div class="field-item text">
                                <label for="father-tel">Father's Telephone Number</label>
                                <input type="text" id="father-tel" placeholder="0000000000" name="father-tel">
                            </div>
                                                        
                            <div class="field-item text">
                                <label for="mother">Mother's Name</label>
                                <input type="text" id="mother" name="mother">
                            </div>
                                                        
                            <div class="field-item text">
                                <label for="mother-tel">Mother's Telephone Number</label>
                                <input type="text" id="mother-tel" placeholder="0000000000" name="mother-tel">
                            </div>
                                                                                  
                            <div class="field-item text">
                                <label for="guardian">Guardian's Name</label>
                                <input type="text" id="guardian" name="guardian">
                            </div>
                                                        
                            <div class="field-item text">
                                <label for="guardian-tel">Guardian's Telephone Number</label>
                                <input type="text" id="guardian-tel" placeholder="0000000000" name="guardian-tel">
                            </div>
                           
                        </div>

                    </div>
                    
                </fieldset>   
                
                <fieldset>

                    <legend class="panel-heading">
                        Identification Information
                    </legend>

                    <div>

                        <div class="panel-body">
                            
                            <div class="field-item text">
                                <label for="passport">Nationality</label>
                                <input type="text" id="nationality" placeholder="e.g. South Africa" name="nationality">
                            </div>
                            
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
                    <a href="main.php" class="button">SUBMIT</a>
                </div>
                
            </form>
            
        </section>
        
    </div>

</section>

<!-- C. END -->
</body>
<?php include('includes/footer.inc'); ?>