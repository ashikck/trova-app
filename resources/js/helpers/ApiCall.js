const ApiGet = (url, data, options, callback) => {
    axios.defaults.withCredentials = true;
    axios.get(url, data, options).then(
        result => {
            callback(result.data, result.status);
        },
        error => {
            callback(error, error.response ? error.response.status : "");
        }
    );
};
const ApiPost = (url, data, options, callback) => {
    axios.defaults.withCredentials = true;
    axios.post(url, data, options).then(
        result => {
            callback(result.data, result.status);
        },
        error => {
            callback(error, error.response ? error.response.status : "");
        }
    );
};
export { ApiGet, ApiPost };
