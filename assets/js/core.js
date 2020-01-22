var current_user = window.localStorage.getItem(wc_config.prefix + 'uid')
var current_role = window.localStorage.getItem(wc_config.prefix + 'role')
var current_project = window.localStorage.getItem(wc_config.prefix + 'pid')

var fnc = {
    json_exist(snap){
        if((snap != '') && (snap.length > 0)){
            return true;
        }else{
            return false;
        }
    },
    send_email(param, nextStage, successText, failText, preloadhide, next){
        console.log('Sending email ...');
        // var jxr = $.post('http://simanh.psu.ac.th/icustomsystem/mailer/sender.php', param, function(){})
        var jxr = $.post('https://fxplor.com/mymailer/mailer/sender.php', param, function(){})
                   .always(function(resp){
                        if(resp == 'Y'){
                            if(nextStage == 'none'){
                                try {
                                    if(preloadhide){ preload.hide() }
                                } catch (e) {

                                } finally {

                                }
                            }else if(nextStage == 'redirect'){
                              window.location = next
                            }else{
                                try {
                                    if(preloadhide){ preload.hide() }
                                } catch (e) {

                                } finally {

                                }
                                swal({
                                    title: "Success",
                                    text: successText,
                                    type: "success",
                                    showCancelButton: false,
                                    confirmButtonColor: "#126cd5",
                                    confirmButtonText: "OK",
                                    closeOnConfirm: true
                                },
                                function(){
                                    if(nextStage == 'reload'){
                                        window.location.reload();
                                    }else if(nextStage == 'none'){
                                        // Do nothing
                                    }else{
                                        window.location = nextStage
                                    }
                                });
                            }
                        }else{ // Can not send email
                            try {
                                if(preloadhide){ preload.hide() }
                            } catch (e) {

                            } finally {

                            }
                            swal({
                                title: "Warning",
                                text: failText,
                                type: "warning",
                                showCancelButton: false,
                                confirmButtonColor: "#126cd5",
                                confirmButtonText: "OK",
                                closeOnConfirm: true
                            },
                            function(){
                                if(nextStage == 'reload'){
                                    window.location.reload();
                                }else{
                                window.location = nextStage
                                }
                            });
                        }
               })
    },convertThaidatetime: function(input){
        let a = input.split(' ');
        let cdate = a[0].split('-');
        return parseInt(cdate[2]) + ' ' + thmonth[parseInt(cdate[1])] + ' ' + (parseInt(cdate[0]) + 543) + ' ' + a[1];
    },
    convertThaidate: function(input){
        if(input != null){
            let a = input.split(' ');
            let cdate = a[0].split('-');
            return parseInt(cdate[2]) + ' ' + thmonth[parseInt(cdate[1])] + ' พ.ศ. ' + (parseInt(cdate[0]) + 543);
        }else{
            return '<span class="text-danger">ไม่สามารถระบุได้</span>'
        }
    },
    convertThaidate2: function(input){
        let a = input.split(' ');
        let cdate = a[0].split('-');
        return parseInt(cdate[2]) + ' ' + thmonth_sh[parseInt(cdate[1])] + ' ' + ((parseInt(cdate[0]) + 543).toString()).substring(2,4);
    },
    convertEndatetime: function(input){
        let a = input.split(' ');
        let cdate = a[0].split('-');
        return parseInt(cdate[2]) + ' ' + enmonth[parseInt(cdate[1])] + ', ' + (parseInt(cdate[0])) + ' ' + a[1];
    },
    convertEndate: function(input){
        let a = input.split(' ');
        let cdate = a[0].split('-');
        return parseInt(cdate[2]) + ' ' + enmonth[parseInt(cdate[1])] + ', ' + (parseInt(cdate[0]));
    },
    convertEnThaidate2: function(input){
        let a = input.split(' ');
        let cdate = a[0].split('-');
        return parseInt(cdate[2]) + ' ' + enmonth_sh[parseInt(cdate[1])] + ', ' + ((parseInt(cdate[0])).toString()).substring(2,4);
    },
    randomString: function(L){
        var s = '';
        var randomchar = function() {
            var n = Math.floor(Math.random() * 62);
            if (n < 10) return n; //1-10
            if (n < 36) return String.fromCharCode(n + 55); //A-Z
            return String.fromCharCode(n + 61); //a-z
        }
        while (s.length < L) s += randomchar();
        return s;
    },
    randomNumber: function(){
        return Math.floor((Math.random() * 99999) + 1);
    },
    check_dateformat: function(datevalue){
        var res = datevalue.split("-");
        if(res.length > 0){
            if(res[0].length > 2){
                return (parseInt(res[0]) - 543) + '-' + res[1] + '-' + res[2];
            }else{
                return (parseInt(res[2]) - 543) + '-' + res[1] + '-' + res[0];
            }
        }else{
            return datevalue;
        }
    },
    calDateDiff: function(start, end){
    // Here are the two dates to compare
    var date1 = start;
    var date2 = end;
    // console.log(date1);

    // First we split the values to arrays date1[0] is the year, [1] the month and [2] the day
    date1 = date1.split('-');
    date2 = date2.split('-');

    // Now we convert the array to a Date object, which has several helpful methods
    date1 = new Date(date1[0], date1[1], date1[2]);
    date2 = new Date(date2[0], date2[1], date2[2]);

    // We use the getTime() method and get the unixtime (in milliseconds, but we want seconds, therefore we divide it through 1000)
    date1_unixtime = parseInt(date1.getTime() / 1000);
    date2_unixtime = parseInt(date2.getTime() / 1000);

    // This is the calculated difference in seconds
    var timeDifference = date2_unixtime - date1_unixtime;

    // in Hours
    var timeDifferenceInHours = timeDifference / 60 / 60;

    // and finaly, in days :)
    var timeDifferenceInDays = timeDifferenceInHours  / 24;

    return timeDifferenceInDays;
    }
}
