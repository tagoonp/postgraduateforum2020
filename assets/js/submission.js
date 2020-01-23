var presenter_author = 0
var submission = {
  savedraft(checkStage){
    if(checkStage == 1){ // With notify
      $check = 0
      $('.form-control').removeClass('is-invalid')

      if($('#txtTitle').val() == ''){
        $('#txtTitle').addClass('is-invalid')
        $check++
      }

      if($('#txtType').val() == ''){
        $('#txtType').addClass('is-invalid')
        $check++
      }

      if($('#txtKeyword').val() == ''){
        $('#txtKeyword').addClass('is-invalid')
        $check++
      }

      if($('#txtCategory').val() == ''){
        $('#txtCategory').addClass('is-invalid')
        $check++
      }

      if($check != 0){
        return ;
      }

      if(presenter_author == 0){
         swal("Warning", "Please select presenter from your author list", "warning")
         return ;
      }

      var abst = abstract.getData();

      $type = $('#txtType').val()
      if($type == ''){
        $type = 'NA'
      }

      $cat = $('#txtCategory').val()
      if($cat == ''){
        $cat = 'NA'
      }
      var param = {
        pid: current_project,
        uid: current_user,
        title: $('#txtTitle').val(),
        type: $type,
        abstract: abst,
        keyword: $('#txtKeyword').val(),
        category: $cat
      }
      preload.show()
      var jxr = $.post(wc_config.api + 'submission?stage=save_draft', param, function(){}, 'json')
                 .always(function(snap){
                   if(fnc.json_exist(snap)){
                     snap.forEach(i=>{
                       if(i.status == 'Success'){
                         current_project = i.pid
                         window.localStorage.setItem(wc_config.prefix + 'pid', i.pid)
                         window.location = 'submission_review?uid=' + current_user + '&pid=' + current_project
                       }else{
                         preload.hide()
                         swal("Error", "Can not submit your abstract, please contact system administrator", "error")
                       }
                     })
                   }
                   else{
                     preload.hide()
                     swal("Error", "Can not submit your abstract, please contact system administrator", "error")
                   }
                 })


    }else{
      if($('#txtTitle').val() == ''){
        return ;
      }

      var abst = abstract.getData();

      $type = $('#txtType').val()
      if($type == ''){
        $type = 'NA'
      }

      $cat = $('#txtCategory').val()
      if($cat == ''){
        $cat = 'NA'
      }
      var param = {
        pid: current_project,
        uid: current_user,
        title: $('#txtTitle').val(),
        type: $type,
        abstract: abst,
        keyword: $('#txtKeyword').val(),
        category: $cat
      }
      var jxr = $.post(wc_config.api + 'submission?stage=save_draft', param, function(){}, 'json')
                 .always(function(snap){
                   console.log(snap);
                   if(fnc.json_exist(snap)){
                     snap.forEach(i=>{
                       if(i.status == 'Success'){
                         current_project = i.pid
                         window.localStorage.setItem(wc_config.prefix + 'pid', i.pid)
                       }
                     })
                   }
                 })
    }
  },
  list_author(hl){
    if(current_project != null){
      var param = {
        pid: current_project,
        uid: current_user
      }
      var jxr = $.post(wc_config.api + 'submission?stage=list_author', param, function(){}, 'json')
                 .always(function(snap){
                   if(fnc.json_exist(snap)){
                     $('#tableAuthor').empty()
                     $c = 1;
                     snap.forEach(i=>{

                       $btn = '<button class="btn btn-icon" onclick="setAuthorUpdate(\'' + i.ID + '\')" type="button"><i class="fas fa-pencil-alt"></i></button>' +
                              // '<button class="btn btn-icon"><i class="fas fa-chevron-up"></i></button>' +
                              // '<button class="btn btn-icon"><i class="fas fa-chevron-down"></i></button>' +
                              '<button class="btn btn-icon text-danger" onclick="deleteAuthor(\'' + i.ID + '\')" type="button"><i class="fas fa-trash"></i></button>'

                       if($c == 1){
                         $btn = '<button class="btn btn-icon" onclick="setAuthorUpdate(\'' + i.ID + '\')" type="button"><i class="fas fa-pencil-alt"></i></button>' +
                                // '<button class="btn btn-icon text-muted" disabled><i class="fas fa-chevron-up"></i></button>' +
                                // '<button class="btn btn-icon"><i class="fas fa-chevron-down"></i></button>' +
                                '<button class="btn btn-icon text-danger" onclick="deleteAuthor(\'' + i.ID + '\')" type="button"><i class="fas fa-trash"></i></button>'
                       }else if($c == snap.length){
                         $btn = '<button class="btn btn-icon" onclick="setAuthorUpdate(\'' + i.ID + '\')" type="button"><i class="fas fa-pencil-alt"></i></button>' +
                                // '<button class="btn btn-icon"><i class="fas fa-chevron-up"></i></button>' +
                                // '<button class="btn btn-icon text-muted" disabled><i class="fas fa-chevron-down"></i></button>' +
                                '<button class="btn btn-icon text-danger" onclick="deleteAuthor(\'' + i.ID + '\')" type="button"><i class="fas fa-trash"></i></button>'
                       }

                       $presenter = '<label class="custom-switch mt-2 pl-0">' +
                         '<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" onclick="switchPresenter(\'' + i.ID + '\')">' +
                         '<span class="custom-switch-indicator"></span>' +
                       '</label>'

                       if(i.author_presenter == 'Y'){
                         $presenter = '<label class="custom-switch mt-2 pl-0">' +
                           '<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>' +
                           '<span class="custom-switch-indicator"></span>' +
                         '</label>'
                         presenter_author++
                       }

                       $('#tableAuthor').append('<tr>' +
                                                  '<td class="p-2" style="vertical-align: top;">' + $c + '</td>' +
                                                  '<td class="p-2" style="vertical-align: top;">' +
                                                    '<div class="text-dark" style="font-weight: 400;">' + i.author_prefix + ' ' + i.author_fullname + '</div>' +
                                                    '<div>E-mail address : ' + i.author_email + '<br>' + i.author_institution + '</div>' +
                                                  '</td>' +
                                                  '<td class="p-2" style="vertical-align: top;">' +
                                                    $presenter +
                                                  '</td>' +
                                                  '<td class="text-right">' +
                                                    $btn +
                                                  '</td>' +
                                                '</tr>')
                       $c++
                     })
                     if(hl){ preload.hide() }
                   }else{
                     $('#tableAuthor').html('<tr><td colspan="4" class="text-center">No author / co-author found</td></tr>')
                     if(hl){ preload.hide() }
                   }
                 })
    }
  },
  get_lasted_submission(hl){
    if(current_project != null){
      var param = {
        pid: current_project,
        uid: current_user
      }
      var jxr = $.post(wc_config.api + 'submission?stage=recent_info', param, function(){}, 'json')
                 .always(function(snap){
                   console.log(snap);
                   if(fnc.json_exist(snap)){
                     snap.forEach(i=>{
                       $('#txtTitle').val(i.sub_title)
                       if(i.sub_presenttype == 'NA'){
                         $('#txtType').val('')
                       }else{
                         $('#txtType').val(i.sub_presenttype)
                       }
                       $('#txtAbstract').val(i.sub_abstract)
                       $('#txtKeyword').val(i.sub_keywords)
                       if(i.sub_category == 'NA'){
                         $('#txtCategory').val('')
                       }else{
                         $('#txtCategory').val(i.sub_category)
                       }
                       setTimeout(function(){
                         abstract.setData(i.sub_abstract)
                         if(hl){ preload.hide() }
                       }, 1000)

                     })
                   }else{
                     if(hl){ preload.hide() }
                   }
                 })
    }else{
      if(hl){ preload.hide() }
    }
  }
}

function setAuthorUpdate(id){
  preload.show()
  $('#txtAuthorId2').val('')
  $('#txtPosition2').val('')
  $('#txtPosition_o2').val('')
  $('#txtPrefix2').val('')
  $('#txtFullname2').val('')
  $('#txtInstitution2').val('')
  $('#txtCountry2').val('')
  $('#txtEmail2').val('')

  var param = {
    pid: current_project,
    uid: current_user,
    aid: id
  }
  var jxr = $.post(wc_config.api + 'submission?stage=get_author', param, function(){}, 'json')
             .always(function(snap){
               if(fnc.json_exist(snap)){
                 snap.forEach(i => {
                   $('#txtAuthorId2').val(id)
                   $('#txtPosition2').val(i.author_position)
                   if(i.author_position == 'Other'){
                     $('.position_o').removeClass('dn')
                     $('#txtPosition_o2').val(i.author_position_o)
                   }else{
                     $('.position_o').addClass('dn')
                   }
                   $('#txtPrefix2').val(i.author_prefix)
                   $('#txtFullname2').val(i.author_fullname)
                   $('#txtEmail2').val(i.author_email)
                   $('#txtInstitution2').val(i.author_institution)
                   $('#txtCountry2').val(i.author_country)
                 })
                 preload.hide()
                 $("#authorModalUpdate").modal()
               }else{
                 preload.hide()
                 swal("Error!", "Author information not found", "error")
               }
             })

}

function switchPresenter(id){
  var param = {
    pid: current_project,
    uid: current_user,
    aid: id
  }
  preload.show()
  var jxr = $.post(wc_config.api + 'submission?stage=switch_author', param, function(){})
             .always(function(resp){
               if(resp == 'Y'){
                 submission.list_author(true)
               }else{
                 preload.hide()
                 swal("Error!", "Can not update presenter status", "error")
               }
             })
}

function deleteAuthor(id){

  swal({    title: "Are you sure?",
              text: "You will not be able to recover this author record!",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, delete it!",
              closeOnConfirm: true },
              function(){
                preload.show()
                var param = {
                  pid: current_project,
                  uid: current_user,
                  aid: id
                }
                var jxr = $.post(wc_config.api + 'submission?stage=delete_author', param, function(){})
                           .always(function(resp){
                             if(resp == 'Y'){
                               submission.list_author(true)
                             }else{
                               preload.hide()
                               swal("Error!", "Can not delete author info.", "error")
                             }
                           })
              });



}
