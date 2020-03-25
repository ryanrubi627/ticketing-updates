
//Retrieving data to modal from database to update..
$(document).ready(function(){
	$('.edtbtn').on('click', function(){
		$('#myModal').modal('show');

		var tr = $(this).closest('tr');

		var data = tr.children("td").map(function(){
			return $(this).text();
		}).get();

		//console.log(data);

		$('#ticket_number').val(data[0]);
		$('#pwd').val(data[2]);
		$('#comment').val(data[3]);
		$('#exampleFormControlSelect1').val(data[4]);

	});
});

//insert..
$(document).ready(function(){
	$("#sbmt").click(function(e){
		e.preventDefault();

		var name = $("#name").val();
        var title = $("#pwd1").val();
        var description = $("#comment1").val();
        var importance = $("#exampleFormControlSelect12").val();
        var date = $("#date").val();

        $.ajaxSetup({
    		headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		}
		});

		$.ajax({
           type:'POST',
           url:'/create',
           data:{
           		name:name, 
           		title:title, 
           		description:description,
           		importance:importance,
           		date:date
           	},
           success:function(data){
             location.reload(true);
           }
        });
	});
});


//Update..
$(document).ready(function(){
	$("#sbmt2").click(function(e){
		e.preventDefault();

		var id = $("#ticket_number").val();
        var title = $("#pwd").val();
        var description = $("#comment").val();
        var importance = $("#exampleFormControlSelect1").val();

        $.ajaxSetup({
    		headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		}
		});

		$.ajax({
           type:'POST',
           url:'/update',
           data:{
           		id:id,
           		title:title, 
           		description:description,
           		importance:importance
           	},
           success:function(data){
             location.reload(true);
           }
        });
	});
});


$(document).ready(function(){
  $('.view-btn').on('click', function(){
    $('#viewModal').modal('show');

    var tr = $(this).closest('tr');

    var data = tr.children("td").map(function(){
      return $(this).text();
    }).get();

    $('#ticket_number-1').val(data[0]);
    $('#name-1').val(data[1]);
    $('#title-1').val(data[2]);
    $('#description-1').val(data[3]);
    $('#importance-1').val(data[4]);
    $('#date-1').val(data[5]);

  });
});


$(document).ready(function(){
    $("#sbmt-closed-tckt").click(function(e){
        e.preventDefault();

        var ticket_id = $('#ticket_number-1').val();
        var name = $("#name-1").val();
        var title = $("#title-1").val();
        var description = $("#description-1").val();
        var importance = $("#importance-1").val();
        var date = $("#date-1").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
           type:'POST',
           url:'/admin/insert',
           data:{
                ticket_id:ticket_id,
                name:name, 
                title:title, 
                description:description,
                importance:importance,
                date:date
            },
           success:function(data){
             $('#viewModal').modal('hide');
             location.reload(true);
           }
        });
    });
});
