export const random = (min, max) => {
  return Math.floor(min + Math.random() * (max + 1 - min));
};

export const postData = async (url = '', data = {}) => {
  if (!data.token) {
    data.token = '';
  }
  if (!data.contentType) {
    data.contentType = 'application/json';
  }
  console.log(data);
  const response = await fetch(url, {
    method: 'POST',
    mode: 'cors',
    cache: 'no-cache',
    credentials: 'same-origin',
    headers: {
      Authorization: 'Bearer ' + data.token,
      'Content-type': data.contentType
    },
    redirect: 'follow',
    referrerPolicy: 'no-referrer',
    body: JSON.stringify(data)
  });
  return response.json();
};

export const sortNumbers = (a, b) => {
  return b - a;
};
