<!DOCTYPE html>
<html lang="en">

<?php include_once("repeatable/head.php"); ?>

<body>
   <div class="container-fluid">
      <div class="container">
         <div class= "row">
            <div class="col-xs-12">
               <h1 class="orange">NFL Punt Data Analysis</h1>

               <p>
                  The following work will be my analysis and insight on a competition that can be found at the following link:
                  <a href="https://www.kaggle.com/c/NFL-Punt-Analytics-Competition/data">Kaggle Data For NFL Punt Competition</a>.
               </p>

               <h3 class="orange">Description:</h3>
               <p> "The Challenge</p>
               <p>
                  For the 2018 season, the NFL revised their kickoff rules in an effort to reduce the risk of injury during those plays. By examining injury reports, player position and velocity data, and game video, they were able to understand the game-play circumstances that may exacerbate the risk of injury to players.
               </p>
               <p>
                  This comprehensive review showed that over the course of all games during the 2015-2017 seasons, the kickoff represented only six percent of plays but 12 percent of concussions. Players had approximately four times the risk of concussion on returned kickoffs compared to running or passing plays. The changes to the kickoff rule aim to address the components that posed the most risk, like the use of a two-man wedge.
               </p>
               <p>
                  Now, the NFL is challenging Kagglers to help them perform the same examination, this time on punt play rules. They have provided data for all punt plays from the 2016 and 2017 NFL seasons that includes player rosters, on-field position data and video data, including the plays in which a player suffered a concussion.
               </p>
               <p>
                  Your challenge is to propose specific rule modifications (e.g. changes to the initial formation, tackling techniques, blocking rules etc.), supported by data, that may reduce the occurrence of concussions during punt plays (Kaggle.com)."
               </p>
            </div> <!-- End Col -->
         </div> <!-- End Row -->
         <div class="row">
            <div class="col-xs-12">
               <h3 class="orange">What types of impact are most common in the concussion data?</h3>
               <p>
                  After assessing the data, I decided that the type of impact to a concussed player is very important if I want to come up with any new rule to prevent concussion. So after loading all of the given Kaggle data into my R program, I created a plot to help me better understand the type of impacts we can expect on a concussion causing play. The following image is the distribution of types of concussion causing impacts from the data: 
               </p>
            </div>
         </div><!-- End Row -->
         
         <div class="row"> 
            <div class="col-xs-12 col-md-8">
               <img src="images/impactDistribution.png" class="img-responsive">
            </div>
            <div class="col-xs-12 col-md-4">
               <p>As you can see the types of contact that are most common to concussion on punt plays are helmet-to-Body and helmet-to-helmet which is not a big surprise. I will dig into the types of player activity and how this is related to concussions.
               </p>
            </div>
         </div><!-- End Row -->



         <div class="row">
            <div class="col-xs-12">
              <h3 class="orange">What types of player activity is most common during a concussion causing play?</h3>
              <p>
               The NFL has defined four different types of contact activities in this dataset: Blocking, Blocked, Tackling, Tackled. After doing a simple grouping on the type of contact that causing concussions on punt plays, we can see their is a clear trend in the types of activities that cause concussions. Observe the following graph: 
            </p>
         </div>
      </div> <!-- End row -->

      <div class="row">
         <div class="col-xs-12 col-md-8"> 
            <img src="images/Player_Activity.png" class="img-responsive col">
         </div>
         <div class="col-xs-12 col-md-4"> 
            <p>
               According to our data, most to least likely actions to cause a concussions are tackling, getting blocked, blocking, and finally getting tackled. In my opinion this data can be misleading. The reason tackled has the least amount of occurrences is because only one person is going to be tackled on each punt play. On the other hand, multiple players will block and be blocked during any given punt play. Also, their are group tackles and players will break tackles, so their are likely many more actions of tackling then players being tackled.
            </p>
            <p>
               This data could be pretty informing later down the road in this analysis, but for now let us continue to some simple analyses to better understand some basic trends.
            </p>
         </div>
      </div> <!-- End Row -->

      <div class="row">
         <div class="col-xs-12">
            <h3 class="orange">What types of player activity is most common during a concussion causing play?</h3>
            <p>
               I categorized every position on punt and punt return in order to better understand the types of positions which have been most susceptible to concussion. The position groups go as follows: Punt Line (P_Line), Punt Wing (P_Wing), Gunner (P_Gunner), Returner (PR_Returner), Return Line (PR_Line), Personal Protector (P_Personal_Protector), Punter (P_Punter), Full Back (PR_FB), Gunner Defender (PR_Gunner_Defender), and Linebacker (PR_LB). Every position group categorization has at least one concussion associated with it. If you take a minute to look at the following data table, you will see a few things of importance. 
            </p>
         </div>
      </div>

      <div class="row">
         <div class="col-xs-12 col-md-8">
            <table id="posGTable" class="table-striped table table-hover">
               <thead>
                  <tr>
                   <th>Position Group</th>
                   <th>Number of Plays</th>
                   <th>Number of Concussions</th>
                   <th>Percentage Concussion</th>
                </tr>
             </thead>
          </table>
       </div>
       <div class="col-xs-12 col-md-4">
         <p>
            Take a look at the 'Number of Concussions' column in the data table. Sort this data descending and take a look at the position groups that have the highest number of concussions. We see that Punt Lineman have by far the highest number with 14. Following that is Punt Wings with 6 and then Gunners and Returners with 5. 
         </p>
         <p>
            Next sort the data by the 'Percentage Concussion' column descending. Let us through out PR_FB since there is only one concussion and only 324 recorded plays. The next three position groups with the highest concussion percentage by plays are three groups in the top four of most concussions in number. So, all four of these position groups are interesting and I will be basing a lot of the following analysis on these position.
         </p>
      </div>
   </div>

   <div class="row">
      <hr>
      <h3> There is more analysis that is currently being worked on. Please check back later ...</h3>
      <hr>
   </div>

 <!--   <div class="row">
      <h1 class="orange">Blanchard Valley Hospital Certification Tracking System</h1>
      <p>
         Andrew Alten, Nolan Connell, Matina Matic, Josh Robinson
      </p>
      <p>
         Sponsor: Jordan Ringenberg
      </p>
      <p>
         This project was completed as part of A software engineering course at the University of Findlay. The project was designed by members of the Blanchard Valley Hospital in order to allow nursing educators to track training dates for employees and ensure that they stay up-to-date on certifications. Their past work flow took too much time to complete. So our undergraduate software engineering team created a solution to help streamline their process to keep nurses competent, certified, and educated.
      </p>

   </div> -->
</div> <!-- End container -->

</div><!-- End container Fluid -->
<?php
include_once("repeatable/footer.php");

include_once("repeatable/scripts.php");
?>

<script>

   $(document).ready(function() {
     getTable();

  });
</script>
</body>
</html>