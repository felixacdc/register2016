"use strict";

(function() {
    self.Verification = function(code, token, url){
        this.code = code;
        this.token = token;
        this.url = url;
    };

    self.Verification.prototype = {
        verify: function(callback) {
            $.ajax({
                url: this.url,
                headers: {'X-CSRF-TOKEN': this.token},
                type: "POST",
                data: {
                    code: this.code,
                },
                success: function(response) {
                    if ( response == "ok") {
                        callback(null);
                    } else {
                        return callback(new Error("codigo no existe o ya fue utilizado"));
                    }
                }
            });
        }
    }
})();
