var simpleCache = {};

function handleCache() {
    var self = this;

    var now = function () {
        return new Date().getTime() / 1000;
    };

    this.has = function (key) {
        return simpleCache.hasOwnProperty(key);
    };

    this.get = function (key) {
        return simpleCache[key];
    };

    this.set = function (key, value) {
        simpleCache[key] = value;
    };

    this.remove = function (key) {
        delete simpleCache[key];
    };

    this.clear = function () {
        simpleCache = {};
    };

    this.keys = function () {
        var keys = [];
        for (var key in simpleCache)
            if (simpleCache.hasOwnProperty(key)) keys.push(key);
        return keys;
    };

    this.expired = function (entrytime, curr) {
        if (!curr) curr = now();
        return entrytime < curr;
    };

    this.trim = function () {
        var curr = now();
        for (var key in simpleCache)
            if (simpleCache.hasOwnProperty(key))
                if (self.expired(simpleCache[key].expires, curr))
                    self.remove(key);
    };

    setInterval(self.trim, 600 * 1000);
}

function getTransData(transKey) {
    var datas = "";

    $.ajax({
        type: "GET",
        url: "/translate/get/" + transKey,
        async: false,
        dataType: "json",
    })
        .done(function (success) {
            datas = success.data;
        })
        .fail(function (error) {
            datas = "";
        });

    return datas;
}

function transData(transKey) {
    var cache = new handleCache();

    if (cache.has(transKey)) {
        return cache.get(transKey);
    } else {
        cache.set(transKey, getTransData(transKey));
        return cache.get(transKey);
    }
}

function updateTransData(oldTransKey, transKey) {
    var cache = new handleCache();

    if (!cache.has(oldTransKey)) {
        cache.remove(oldTransKey);
    }

    cache.set(transKey, getTransData(transKey));
}

function removeTransData(transKey) {
    var cache = new handleCache();

    cache.remove(transKey);
}
