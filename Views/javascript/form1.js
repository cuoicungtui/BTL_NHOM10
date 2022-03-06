var form = document.querySelector('form')
// var Name = document.getElementById('name')
var cccd = document.getElementById('cccd')
var years = document.getElementById('years')
var nation = document.getElementById('nation')
var tinh = document.getElementById('tinh')
var huyen = document.getElementById('huyen')
var xa = document.getElementById('xa')
var sonha = document.getElementById('sonha')
var email = document.getElementById('email')


function kiemtra(){
  // let Name = document.getElementById('name').value
  // let kiemtraloi = false
  // if(Name.length === 0){
  //   document.getElementById('loiten').innerHTML = 'Tên không được để trống'
  //   document.getElementById('loiten').style.color = 'red'
  //   kiemtraloi = true
  // }else {
  //   let regexName = /^[a-zA-Z!@#\$%\^\&*\)\(+=._-]{2,}$/
  //   if(!regexName.test(Name)){
  //     document.getElementById('loiten').innerHTML = 'Tên không hợp lệ'
  //     document.getElementById('loiten').style.color = 'red'
  //     kiemtraloi = true
  //   }
  //   else {
  //     document.getElementById('loiten').innerHTML = ''
  //   }
  // }
  // return kiemtraloi
  
  let cccd = document.getElementById('cccd').value

  if(cccd.length === 0){
    kiemtraloi = true
  }
  else {
    let regexSo = /^[Z0-10]/
      if(!regexSo.test(cccd)){
        document.getElementById('loi_cccd').innerHTML = 'Bạn phải nhập chữ số'
        document.getElementById('loi_cccd').style.color = 'red'
        kiemtraloi = true
      }
      else {
        document.getElementById('loi_cccd').innerHTML = ''
      }
  }
  return kiemtraloi

}

