console.log(current_user);
var authen = {
  init(){
    if((current_user == null) || (current_role == null)){
      window.location = '../login'
      return ;
    }
  },
  get_current_user(hl){
    var param = { uid : current_user, role: current_role }
    var jxr = $.post(wc_config.api + 'authenication?stage=info', param, function(){}, 'json')
               .always(function(snap){
                 if(fnc.json_exist(snap)){
                   snap.forEach(i => {
                     $('.textUserFullname').html(i.prefix + i.fullname)
                     $('.textUserRole').html('( ' + i.register_type + ' )')
                     if(i.register_type == 'Participants'){
                       $('.unSubmittion_componants').addClass('dn')
                     }
                     if(i.academic_title == 'Other'){
                       $('#textAcademicPosition').html(i.academic_title + ' (' + i.academic_title_o + ')')
                     }else{
                       $('#textAcademicPosition').html(i.academic_title)
                     }
                     $('#textInstitution').html(i.institution)
                     $('#textPhone').html(i.phone)
                     $('#textRegas').html(i.register_type)
                     $('#textEmail').html(i.username)
                     $('#textCountry').html(i.country)

                     $('#txtPosition').val(i.academic_title)
                     if(i.academic_title == 'Other'){
                       $('.position_o').removeClass('dn')
                       $('#txtPosition_o').val(i.academic_title_o)
                     }
                     $('#txtPrefix').val(i.prefix)
                     $('#txtFullname').val(i.fullname)
                     $('#txtInstitution').val(i.institution)
                     $('#txtPhone').val(i.phone)
                     $('#txtRegtype').val(i.register_type)
                     $('#txtEmail').val(i.username)
                     if(i.sightseeing == 1){
                       $('#txtCheckbox1').attr('checked', true)
                       $('#textSightseeing').html('<i class="fas fa-check"></i> Yes')
                     }
                   })
                   if(hl){ preload.hide() }
                 }else{
                   window.localStorage.removeItem(wc_config.prefix + 'uid')
                   window.localStorage.removeItem(wc_config.prefix + 'role')
                   window.localStorage.removeItem(wc_config.prefix + 'pid')
                   window.location = '../'
                 }
               })
  },
  logout(){
    var param = { uid: current_user }
    console.log(param);
    window.localStorage.removeItem(wc_config.prefix + 'uid')
    window.localStorage.removeItem(wc_config.prefix + 'role')
    window.localStorage.removeItem(wc_config.prefix + 'pid')
    window.location = '../'
  }
}

authen.init()
