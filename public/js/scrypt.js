$(document).ready(function(){
    $("#signup").click((e)=>{
        pwd=$("#pwd").val();
        cpwd=$("#cpwd").val();
        if(pwd!=cpwd){
            e.preventDefault();
            $("#demo").text("Password not match with confirm password");
            $("#demo").css("text-align", "center");
            $("#demo").css("color", "red");
        }
    });
    $("#show").click(()=>{
        $("div.employer").css("display", "block");
        $("#all").css("display", "none");
    })
    $("#apply").click(()=>{
        xyz=$("#j_id").text();
        text=xyz.slice(8);
        $.ajax({

            type: "POST",
            url: "../view/apply.php",
            data:{
                "work":"applyjob",
                "key":text
            },
            success:function(response){
                $("#alert-jobpage").css("display", "block");
                $("#alert-jobpage").append(response);
            }
        });
    })
    $("button.editjob").click((e)=>{
        cb=tr=e.target.parentNode;
        child= $(cb).children();
        id=$(child[0]).attr("id");
        title=$(child[0]).text();
        c_name=$(child[1]).text().slice(11);
        loc=$(child[2]).text().slice(45);
        tag=$(child[3]).text().slice(15);
        email=$(child[4]).text().slice(7);
        desc=$(child[5]).val();
        
        $("#md-name").val(c_name);
        $("#md-email").val(email);
        $("#md-location").val(loc);
        $("#md-job_t").val(title);
        $("#md-job_d").text(desc);
        $("#md-tag").val(tag);
        $("#md-job_id").val(id);

        $('#editModal').modal('toggle');
    })

    $("button.publishjob").click((e)=>{
        cb=tr = e.target.parentNode;
        child = $(cb).children();
        id=$(child[0]).attr("id");
        $.ajax({
            type: "POST",
            url: "../controller/viewController.php",
            data:{
                "work":"publish",
                "key":id
            },
            success:function(response){
                // alert(response);
                // $("div.alertpass").append(response);
                location.href="../view/home.php?status=apply&key=you published the job";
            }
        });
    })
});

function search(){
    let val=$('#search_inp').val();
    if(val==""){
        return false;
    }
    $.ajax({

        type: "POST",
        url: "../controller/viewController.php",
        data:{
            "action":"searchdata",
            "key":val
        },
        success:function(response){
            $("div.employer").css("display", "none");
            $("div.job-post").css("display", "none");
            $("div.bar_result").css("display", "block");
            $("div.bar-result-text").empty();
            $("div.bar-result-text").append(response);
        }
    });
 }
                