// Function to make AJAX request and populate table
function getTable(){
  //I tried to implement data table before but for some reason could not get the cdn js file to work 
  //so I went with a normal bootstrap table
  $("#posGTable").DataTable(
    {
      "paging": false,
      "searching": false,
      "destroy": true, // This is not ideal but for this example is sufficient
      "ajax": {
        url: getPosGUrl(),
        dataSrc: "posG"
      },
      "columns": [
        { data: "position_group" },
        { data: "num_plays" },
        { data: "num_concussion" },
        { data: "percent_concussion" },

      ]
      //,
      // "columnDefs": [
      //   {
      //     "targets": -1,
      //     "render": function ( data, type, row, meta ) {
      //       return CalculatePasserRating(data.attempts, data.completions, data.yards, data.touchdowns, data.interceptions);
      //     }
      //   }
      // ]
    }
  );
};

function getPosGUrl() {
    return "./api/position_group/read.php";
}

