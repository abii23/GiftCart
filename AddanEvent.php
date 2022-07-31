<link rel="stylesheet" href="AddanEvent.scss">

<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Add a Remainder</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" method="POST" Action="AddanEventAction.php" novalidate>

                            <div class="col-md-12">
                                <label for="">Enter Event Name:</label>
                               <input class="form-control" type="text" name="name" placeholder="Event Name" required><br>
                             
                            </div>

                            <div class="col-md-12">
                                <label for="">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required><br>
                                
                            </div>

                            <div class="col-md-12">
                                <br>
                                <label for="">Date</label>
                                <input class="form-control" type="Date" name="Date" placeholder="Date of event" required><br>
                                
                            </div>
                            <div class="col-md-12">
                                <br>
                                <label for="">Set Notification on:</label>
                                <input class="form-control" type="Time" name="time" placeholder="" required><br>
                                
                            </div>
<br>
<div class="col-md-12">
                                
                                <label for="">Description:</label>
<textarea name="Description" id="" cols="20" rows="10"></textarea>                                
                            </div>




                           


                  
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
