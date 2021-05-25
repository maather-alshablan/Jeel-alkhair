
$(document).ready(function () {

    $("#1b").click(function () {
        $("#1i").show();
        $("#2i").hide();
        $("#3i").hide();
        $("#4i").hide();
        $("#5i").hide();
        $("#b3-l").hide();
        $("#3i-2").hide();
        $("#3i-3").hide();
        $("#3i-4").hide();
        $("#3i-5").hide();
    });

    $("#2b").click(function () {
        $("#2i").show();
        $("#1i").hide();
        $("#3i").hide();
        $("#4i").hide();
        $("#5i").hide();
        $("#b3-l").hide();
        $("#3i-2").hide();
        $("#3i-3").hide();
        $("#3i-4").hide();
        $("#3i-5").hide();
    });

    $("#3b").click(function () {
        $("#b3-l").show();
        $("#3i").show();
        $("#1i").hide();
        $("#2i").hide();
        $("#4i").hide();
        $("#5i").hide();
    });

    $("#4b").click(function () {
        $("#4i").show();
        $("#1i").hide();
        $("#2i").hide();
        $("#3i").hide();
        $("#5i").hide();
        $("#b3-l").hide();
        $("#3i-2").hide();
        $("#3i-3").hide();
        $("#3i-4").hide();
        $("#3i-5").hide();
    });

    $("#5b").click(function () {
        $("#5i").show();
        $("#1i").hide();
        $("#2i").hide();
        $("#3i").hide();
        $("#4i").hide();
        $("#b3-l").hide();
        $("#3i-2").hide();
        $("#3i-3").hide();
        $("#3i-4").hide();
        $("#3i-5").hide();
    });

    $("#1bl").click(function () {
        $("#3i").show();
        $("#1i").hide();
        $("#2i").hide();
        $("#4i").hide();
        $("#3i-2").hide();
        $("#3i-3").hide();
        $("#3i-4").hide();
        $("#3i-5").hide();
        
        
    });

    $("#2bl").click(function () {
        $("#3i-2").show();
        $("#1i").hide();
        $("#2i").hide();
        $("#3i").hide();
        $("#4i").hide();
        $("#3i").hide();
        $("#3i-3").hide();
        $("#3i-4").hide();
        $("#3i-5").hide();
        
        
    });

    $("#3bl").click(function () {
        $("#3i-3").show();
        $("#1i").hide();
        $("#2i").hide();
        $("#3i").hide();
        $("#4i").hide();
        $("#3i").hide();
        $("#3i-2").hide();
        $("#3i-4").hide();
        $("#3i-5").hide();
        
        
    });
    $("#4bl").click(function () {
        $("#3i-4").show();
        $("#1i").hide();
        $("#2i").hide();
        $("#3i").hide();
        $("#4i").hide();
        $("#3i").hide();
        $("#3i-2").hide();
        $("#3i-3").hide();
        $("#3i-5").hide();
        
        
    });
    $("#5bl").click(function () {
        $("#3i-5").show();
        $("#1i").hide();
        $("#2i").hide();
        $("#3i").hide();
        $("#4i").hide();
        $("#3i").hide();
        $("#3i-2").hide();
        $("#3i-3").hide();
        $("#3i-4").hide();
        
        
    });

    $("#j1").click(function () {
        $("#ji1").show();
        $("#ji2").hide(); 
    });

    $("#j2").click(function () {
        $("#ji2").show();
        $("#ji1").hide(); 
    });

    $("#fees-no").change(function () {
        $("#receipt").hide(); 
        $("#label-re").hide();
        $("#receipt").prop('required',false);
    });

    $("#fees-yes").change(function () {
        $("#receipt").show(); 
        $("#label-re").show();
        $("#receipt").prop('required',true);
    });

    $("#pre-no").change(function () {
        $("#sch-name").hide(); 
        $("#sch-name").prop('required',false);
    });

    $("#pre-yes").change(function () {
        $("#sch-name").show(); 
        $("#sch-name").prop('required',true);
    });

    $("#save-no").change(function () {
        $("#save-name").hide(); 
        $("#save-name").prop('required',false);
    });

    $("#save-yes").change(function () {
        $("#save-name").show(); 
        $("#save-name").prop('required',true);
    });

    $("#pro-no").change(function () {
        $("#pro-name").hide(); 
        $("#pro-name").prop('required',false);
    });

    $("#pro-yes").change(function () {
        $("#pro-name").show(); 
        $("#pro-name").prop('required',true);
    });

    $("#ple-no").change(function () {
        $("#pro-letters").hide(); 
        $("#pro-letters").prop('required',false);
    });

    $("#ple-yes").change(function () {
        $("#pro-letters").show(); 
        $("#pro-letters").prop('required',true);
    });
    

    $("#breakfast-no").change(function () {
        $("#breakfast-re").hide(); 
        $("#breakfast-re").prop('required',false);
    });

    $("#breakfast-yes").change(function () {
        $("#breakfast-re").show(); 
        $("breakfast-re").prop('required',true);
    });
    
    $("#eat-no").change(function () {
        $("#eat-re").hide(); 
        $("#eat-re").prop('required',false);
    });

    $("#eat-yes").change(function () {
        $("#eat-re").show(); 
        $("eat-re").prop('required',true);
    });

    $("#health-no").change(function () {
        $("#health-re").hide(); 
        $("#health-re").prop('required',false);
    });

    $("#health-yes").change(function () {
        $("#health-re").show(); 
        $("health-re").prop('required',true);
    });
    

    $("#rules-no").change(function () {
        $("#rules-re").hide(); 
        $("#rules-re").prop('required',false);
    });

    $("#rules-yes").change(function () {
        $("#rules-re").show(); 
        $("rules-re").prop('required',true);
    });

    $("#hit-no").change(function () {
        $("#hit-re").hide(); 
        $("#hit-re").prop('required',false);
    });

    $("#hit-yes").change(function () {
        $("#hit-re").show(); 
        $("hit-re").prop('required',true);
    });

    $("#tv-no").change(function () {
        $("#tv-re").hide(); 
        $("#tv-re").prop('required',false);
    });

    $("#tv-yes").change(function () {
        $("#tv-re").show(); 
        $("tv-re").prop('required',true);
    });
});

function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
