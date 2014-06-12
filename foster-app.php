<?php
$pageTitle = "UFBH Foster Application";
$section = "foster-app";
include('inc/header.php'); 
include('js/adoptionApp.html');
?>

        <div class="adoptionApp">        
            <h1>Foster Application</h1>
            <p class="text">UFBH is very careful about the proper placement of our basset hounds. In order to find the best match for you, please fill out the following form. All information collected on this form is for placement purposes only and will not be used for solicitation or sold to other lists.</p>
            <p class="text">(Please do not use this form to contact UFBH about surrendering a dog. Go to the <a href="contact.php">Contact UFBH</a> page and use the form listed there.)</p>

            <div class="wrapper">
                <form action="../php/adoptionApp-process.php" method="post" name="enableform">
                    <input type="hidden" name="form_tools_form_id" value="2" />
    
                    <fieldset>
                    <legend>Biographical Information</legend>
                        <ol>
                            <li>
                                <label for="Last Name">Last Name<em>*</em></label><input type="text" name="LastName" id="Last Name" class="required" />
                            </li>
                            <li>
                                <label for="First Name">First Name<em>*</em></label><input type="text" name="FirstName" id="First Name" class="required" />
                            </li>
                            <li>
                                <label for="Middle Name">Middle Name</label><input type="text" name="MiddleName" id="Middle Name" class="required" />
                            </li>
                            <li>
                                <label for="Address 1">Address<em>*</em></label><input type="text" name="Address1" id="Address 1" class="required" />
                            </li>
                            <li>
                                <label for="Address 2">Address 2</label><input type="text" name="Address2" id="Address 2" />
                            </li>
                            <li>
                                <label for="City">City<em>*</em></label><input type="text" name="City" id="City" class="required" />
                            </li>
                            <li>
                                <label for="State">State<em>*</em></label><input type="text" name="State" id="State" class="required" />
                            </li>
                            <li>
                                <label for="Zip">Zipcode<em>*</em></label><input type="text" name="Zip" id="Zip" class="required" />
                            </li>
                            <li>
                                <label for="Home">Home Phone<em>*</em></label><input type="text" name="HomePhone" id="Home" class="required" />
                            </li>
                            <li>
                                <label for="Work">Work Phone<em>*</em></label><input type="text" name="WorkPhone" id="Work" class="required" />
                            </li>
                            <li>
                                <label for="Cell">Cell Phone</label><input type="text" name="CellPhone" id="Cell" />
                            </li>
                            <li>
                                <label for="DL">Driver's License #<em>*</em></label><input type="text" name="DL" id="DL" class="required" />
                            </li>
                            <li>
                                <label for="email">Email<em>*</em></label><input class="required" type="text" type="text" name="Email" />
                            </li>
                        </ol>
                    </fieldset>
       
                    <fieldset>
                    <legend>Your Dog Experience</legend>
                        <ol>
                            <li>
                                <fieldset class="radio">
                                    <legend>Have you owned a dog before?</legend>
                                    <label><input type="radio" name="Owned a dog" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Owned a dog" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Have you owned a basset hound before?</legend>
                                    <label><input type="radio" name="Owned a basset" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Owned a basset" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <label for="What happened to the dog(s)">If you no longer have the dog(s), what happened to them?</label>
                                <input type="text" name="Whathappendedtodog(s)?" id="What happened to the dog(s)" />
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Have you housetrained a dog before?</legend>
                                    <label><input type="radio" name="Housetraining Experience" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Housetraining Experience" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>If necessary, are you willing to housetrain one now?</legend>
                                    <label><input type="radio" name="Willing to housetrain now" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Willing to housetrain now" value="No" /> No</label>
                                    <label><input type="radio" name="Willing to housetrain now" value="Maybe" /> Maybe</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Have you ever attended formal obedience training classes?</legend>
                                    <label><input type="radio" name="Attended obedience classes" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Attended obedience classes" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <label for="If yes, what school">If yes, what school did you attend?</label>
                                <input type="text" name="ObedienceSchoolName" id="If yes, what school" />
                            </li><br>
                            <li>
                                <label for="Correction techniques">What methods have/will you use to correct bad behavior in a dog?</label>
                                <input type="text" name="CorrectionTechniques" id="Correction techniques" />
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Do you currently have any pets?</legend>
                                    <label><input type="radio" name="Currently have pets" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Currently have pets" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <label for="How many pets currently">If yes, how many pets do you have?</label>
                                <input type="text" name="Howmanycurrentpets" id="How many pets currently" />
                            </li><br>
                        </ol><br>
                        <div class="fields">
                            <fieldset>
                            <legend>Please list all your current pets. Using the form, fill in the blanks; press the 'Add Pet' button and they will appear in the text area below. Follow the same steps for each pet.</legend>
                                <ol>
                                    <li>
                                        <label for="petName">Pet Name</label>
                                        <input type="text" id="petName" value="" />
                                    </li>
                                    <li>
                                        <label for="breed">Breed</label>
                                        <input type="text" id="breed" value="" />
                                    </li>
                                    <li>
                                        <label for="petAge">Pet's Age</label>
                                        <input type="text" id="petAge" value="" />
                                    </li>
                                    <li>
                                        <label for="gender">Gender</label>
                                        <select class="selectboxit-container selectboxit selectboxit-btn selectboxit-enabled" id="gender" name="Gender">
                                            <option value="">-- Select Gender --</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </li>
                                    <li>
                                        <label for="altered">Spayed/Neutered?</label>
                                        <select class="selectboxit-container selectboxit selectboxit-btn selectboxit-enabled" id="altered" name="Altered">
                                            <option value="">-- Select --</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </li><br>
                                    <li>
                                        <label for="ageAltered">Age they were spayed/neutered?</label>
                                        <input type="text" id="ageAltered" value="" />
                                    </li><br>
                                    <li>
                                        <input class="btn-small" type="button" value="Add Pet" onclick="addPet();" />
                                    </li>
                                    <li>
                                        <input class="btn-small" type="button" value="Reset" onclick="resetPetFields();"/>
                                    </li><br>
                                    <li>
                                        <label for="Current Pets">Your Current Pets</label>
                                        <textarea name="Current Pets" id="allPets" rows="7" cols="25"></textarea>
                                        <input class="btn-small" type="button" value="Clear Pet List" onclick="clearPetList();" />
                                    </li>
                                </ol>
                            </fieldset>
                        </div>
                        <ol>
                            <li>
                                <label for="Current Vet">Current Veterinarian</label>
                                <input type="text" name="CurrentVet" id="Current Vet" /> 
                            </li><br>
                            <li>
                                <label for="vet-number">Veterinarian's phone number</label>
                                <input type="text" name="vet_number" id="vet-number" />
                            </li><br>
                            <li>
                                <label for="contact-vet">May we contact your vet for a reference?</label>
                                <label><input type="radio" name="Permission to contact vet" value="Yes" id="contact-vet" /> Yes</label>
                                <label><input type="radio" name="Permission to contact vet" value="No" id="contact-vet" /> No</label>
                            </li><br>
                        </ol>
                    </fieldset>
    
                    <fieldset>
                    <legend>Your Physical Home &amp; Basset Accomodations</legend>
                        <ol>
                            <li>
                                <label for="House Type">In what type of home do you live?</label>
                                <select class="selectboxit-container selectboxit selectboxit-btn selectboxit-enabled" name="HouseType" id="House Type">
                                    <option value="House">House
                                    <option value="Condo">Condo
                                    <option value="Apartment">Apartment
                                    <option value="Duplex">Duplex
                                    <option value="Mobile">Mobile
                                    <option value="Other">Other
                                </select>
                            </li><br>
                            <li>
                                <label for="Other house type">If you marked 'other', please explain.</label>
                                <input type="text" name="Otherhousetype" id="Other house type" />
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Do you own or rent your home?</legend>
                                    <label><input type="radio" name="Own or Rent" value="Own" /> Own</label>
                                    <label><input type="radio" name="Own or Rent" value="Rent" /> Rent</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>If you rent, do you have landlord permission to own a dog?</legend>
                                    <label><input type="radio" name="Landlord Permission" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Landlord Permission" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <label for="Landlord Contact Info">Please list your landlord's name and phone number.</label>
                                <input type="text" name="LandlordContactInfo" id="Landlord Contact Info" />
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Do you have a fenced yard?</legend>
                                    <label><input type="radio" name="Fenced yard" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Fenced yard" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Do you have a doggie-door?</legend>
                                    <label><input type="radio" name="Dog door" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Dog door" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Do you have a swimming pool?</legend>
                                    <label><input type="radio" name="Swimming pool" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Swimming pool" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>If yes, does your pool have a fence?</legend>
                                    <label><input type="radio" name="Pool fence" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Pool fence" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <label for="Day location">Where will the basset stay during the day?</label>
                                <input type="text" name="DayLocation" id="Day location" />
                            </li><br>
                            <li>
                                <label for="Night location">Where will the basset sleep at night?</label>
                                <input type="text" name="NightLocation" id="Night location" />
                            </li><br>
                        </ol>
                    </fieldset>
    
                    <fieldset>
                    <legend>Your Lifestyle</legend>
                        <ol>
                            <li>
                                <fieldset class="radio">
                                    <legend>Are there children in your household?</legend>
                                    <label><input type="radio" name="Children in house" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Children in house" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <label for="Children's ages">If yes, what are the ages of the children?</label>
                                <input type="text" name="ChildrensAges" id="Children's ages" />
                            </li><br>
                            <li>
                                <label for="How many live here">How many individuals live in your home?</label>
                                <input type="text" name="Howmanylivehere" id="How many live here" />
                            </li><br>
                            <li>
                                <label for="Hours alone">How many hours will the basset be without human companionship at any one time?</label>
                                <select class="selectboxit-container selectboxit selectboxit-btn selectboxit-enabled" name="HoursAlone" id="Hours alone">
                                    <option value="Less than two">Less than two</option>
                                    <option value="Less than four">Less than four</option>
                                    <option value="Less than six">Less than six</option>
                                    <option value="Less than eight">Less than eight</option>
                                    <option value="More than eight">More than eight</option>
                                </select>
                            </li><br>
                            <li>
                                <label for="More than eight explanation">If you marked 'more than eight,' please explain.</label>
                                <input type="text" name="Morethaneightexplanation" id="More than eight explanation" />
                            </li><br>
                            <li>
                                <label for="Why a basset">Why do you want a basset hound?</label>
                                <textarea name="Whyabasset" id="Why a basset" rows="7" cols="25"></textarea>
                            </li><br>
                            <li>
                                <fieldset>
                                    <legend>For which of the following reasons would you give up a dog? (Select all that apply.)</legend>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Moving" /> Moving</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Not housetrained" /> Not housetrained</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Divorce" /> Divorce</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Gets too large" /> Gets too large</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Shedding" /> Shedding</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Human allergies" /> Human allergies</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Escaping the yard" /> Escaping the yard</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Behavior problems" /> Behavior problems</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Barking" /> Barking</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Increased work hours" /> Increased work hours</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Aggressive" /> Aggressive</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="New baby" /> New baby</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Does not get along with children" /> Does not get along with children</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Dog has medical problems" /> Dog has medical problems</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Does not get along with other pets" /> Does not get along with other pets</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Children lose interest" /> Children lose interest</label>
                                    <label for="Would give up"><input type="checkbox" name="Wouldgiveup[]" value="Would not give up" /> Would not give up</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <label for="Would give up-other">Other reasons not listed</label>
                                <input type="text" name="Wouldgiveupother" id="Give up-other explanation" />
                            </li>
                        </ol><br>
                        <div class="fields">
                            <fieldset>
                            <legend>What would you do if facing an unexpected vet bill over $1000 necessary to save your dog's life? (Select all that apply.)</legend>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Pay with credit card" /> Pay with credit card</label>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Take out loan" /> Take out loan</label>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Refuse treatment" /> Refuse treatment</label>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Take to shelter" /> Take to shelter</label>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Return to UFBH" /> Return to UFBH</label>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Ask UFBH for money" /> Ask UFBH for money</label>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Have dog euthanized" /> Have dog euthanized</label>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Money is not an issue" /> Money is not an issue</label>
                                <label for="Surprise Vet Bill"><input type="checkbox" name="SurpriseVetBill[]" value="Arrange payment plan with vet" /> Arrange payment plan with vet</label>
                            </fieldset>
                        </div><br>
                        <ol>
                            <li>
                                <label for="Surprise vet bill-other explanation"> Other</label>
                                <input type="text" name="Surprise vet bill-other explanation" name="" id="Surprise vet bill-other explanation" />
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>Is there anyone in your family hesitant about owning a basset hound?</legend>
                                    <label><input type="radio" name="Anyone hesitant" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Anyone hesitant" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                            <li>
                                <label for="Why hesitant">If yes, please explain.</label>
                                <textarea name="Hesitation" id="Why hesitant" rows="7" cols="25"></textarea>
                            </li><br>
                        </ol>
                    </fieldset>
    
                        <fieldset>
                        <legend>Your Preferences</legend>
                            <ol>
                                <li>
                                    <fieldset class="radio">
                                        <legend>Which gender would you prefer for your basset?</legend>
                                        <label><input type="radio" name="Gender preference" value="Male" /> Male</label>
                                        <label><input type="radio" name="Gender preference" value="Female" /> Female</label>
                                        <label><input type="radio" name="Gender preference" value="No preference" /> No preference</label>
                                    </fieldset>
                                </li><br>
                                <li>
                                    <fieldset class="radio">
                                        <legend>Do you have an age preference?</legend>
                                        <label><input type="radio" name="Age preference" value="Puppy" /> Puppy</label>
                                        <label><input type="radio" name="Age preference" value="Young adult" /> Young Adult</label>
                                        <label><input type="radio" name="Age preference" value="Adult" /> Adult</label>
                                        <label><input type="radio" name="Age preference" value="Senior" /> Senior</label>
                                        <label><input type="radio" name="Age preference" value="No preference" /> No preference</label>
                                    </fieldset>
                                </li><br>
                                <li>
                                    <fieldset>
                                        <legend>What traits would you like MOST in your basset hound? (Check all that apply.)</legend>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Independent" /> Independent</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Easygoing" /> Easygoing</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Silly" /> Silly</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Serious" /> Serious</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Protective" /> Protective</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Quiet" /> Quiet</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Playful" /> Playful</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Dependent" /> Dependent</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Gentle" /> Gentle</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Energetic" /> Energetic</label>
                                        <label for="Most Desired Trait"><input type="checkbox" name="MostDesiredTrait[]" value="Confident" /> Confident</label>
                                    </fieldset>
                                </li><br>
                                <li>
                                    <fieldset>
                                    <legend>What traits would you like LEAST in your basset hound? (Check all that apply.)</legend>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Dominance" /> Dominance</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Stubborn" /> Stubborn</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Tendency to escape" /> Tendency to escape</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Protective of  food" /> Protective of food</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Not good with dogs" /> Not good with dogs</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Biting" /> Biting</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Has accidents indoors" /> Has accidents indoors</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Plays rough" /> Plays rough</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Not good with cats" /> Not good with cats</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Destructive chewing" /> Destructive chewing</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Digging" /> Digging</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Noisy" /> Noisy</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Jumps up on people" /> Jumps up on people</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Aggressive with children" /> Aggressive with children</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Excessive shyness" /> Excessive shyness</label>
                                        <label for="Least Desired Trait"><input type="checkbox" name="LeastDesiredTrait[]" value="Counter-cruising" /> Counter-cruising</label>
                                    </fieldset>
                                </li><br>
                            </ol>
                        </fieldset>
    
                    <fieldset>
                    <legend>Additional Comments &amp; Information</legend>
                        <ol>
                            <li>
                                <label for="Additional Comments">Additional Comments</label>
                                <textarea name="AddlComments" id="Additional Comments" rows="7" cols="25"></textarea>
                            </li><br>
                            <li>
                                <label for="How did you hear about UFBH">How did you hear about UFBH?</label><input type="text" name="Howdidyouhear" id="How did you hear about UFBH" />
                            </li><br>
                            <li>
                                <fieldset class="radio">
                                    <legend>May we contact you about events and other gatherings?</legend>
                                    <label><input type="radio" name="Permission to contact" value="Yes" /> Yes</label>
                                    <label><input type="radio" name="Permission to contact" value="No" /> No</label>
                                </fieldset>
                            </li><br>
                        </ol>
                    </fieldset>
                    <fieldset>
                    <legend>Terms for Application Submission</legend>
                        <ol>
                            <li class="emphasis">You must read and agree to the following terms before you will be allowed to 'sign' and submit your application.
                            </li><br>  
                            <li>I/we understand and agree to the abide by the following:
                                <ul>
                                    <li>Utah Friends of Basset Hounds retains ownership of any foster bassets in my/our care.
                                    </li>
                                    <li>
                                        I/we understand that UFBH will reimburse me/us for all pre-approved veterinary expenses incurred by fostering should there be any.
                                    </li>
                                    <li>I/we understand that UFBH will consult with me/us regarding long term care, surgical procedures or euthanasia as a result of terminal illness but UFBH will retain responsiblity for making all necessary decisions.
                                    </li>
                                    <li>I/we understand that UFBH will provide an identification tag which MUST be worn by the foster basset at ALL times. I/we agree to notify the Foster Coordinator should my/our foster basset escape from my/our home.
                                    </li>
                                    <li>I/we understand that UFBH has no substantial prior knowledge of the the foster basset hound's temperament and health. I/we will take all neccessary precautions to protect myself/ourselves and others that may come in contact with the foster basset. I/we understand that the basset hounds in need of fostering may have been exposed to contagious diseases, and, therefore, I/we will keep all my/our dog(s) vaccinations current. UFBH will not be held liable for property damage or harm to persons or animals caused by the foster basset while in the foster home's care.
                                    </li>
                                    <li>I/we agree to provide food, water and shelter to the foster basset for a limited but undetermined period of time.
                                    </li>
                                    <li>I/we agree that the the foster basset hound will not be removed from my/our address or disposed of in any way without the prior approval of UFBH. I/we will not transfer possession without approval!
                                    </li>
                                    <li>I/we will report signs of aggression, behavior problems, and illness in the foster basset to the Foster Coordinator immediately. I/we understand that UFBH will remove the foster basset in a timely manner if requested and/or if it is in the best interest of the basset hound.
                                    </li>
                                    <li>I/We agree to house the foster basset within my/our house and I/we will not leave him/her to sleep or eat outdoors. I/WE agree that we will not chain, stake or tie the foster basset outside.
                                    </li>
                                    <li>I/we agree to not physically abuse the foster basset. I/we agree to not use shock collars on the foster basset.</li>
                                    <li>I/we understand that should I/we decide to pursue adoption of the foster basset, UFBH will send me/us an Adoption Contract that I/we must sign and return with the appropriate required adoption donation.
                                    </li>
                                </ul>
                            </li><br>
                          
                            <li>
                                <input class="required" type="checkbox" name="Accept Terms" value="Accept Terms" onClick="disableIt(document.forms[0].realname)" />
                       I have read the legal statement above. I agree to the terms as they are written.
                            </li><br>
                            <li>
                                Please type your full legal name in the following field.
                            </li><br> 
                            <li>
                                <input class="required" type="text" disabled="true" name="realname" value="Your 'Signature' Typed Here" onkeydown="return extracheck(this)" size="60" />
                            </li><br>
                          
                            <li>
                                <input type="submit" name="Form Submit" value="Submit Application" class="btn-submit">
                            </li><br>
                        </ol>
                    </fieldset>
                </form>
            </div>
            
        </div>
            
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
try {
    var pageTracker = _gat._getTracker("UA-8000985-1");
    pageTracker._trackPageview();
} catch(err) {}
</script>

<?php include('inc/footer.php') ?>