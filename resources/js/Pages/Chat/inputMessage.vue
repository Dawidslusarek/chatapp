<template charset="UTF-8">
    <div style="border-top: 1px solid black" class="grid grid-cols-6">
        <input
            type="text"
            class="col-span-5 p-2 outline-none border-none"
            v-model="message"
            @keyup.enter="sendMessage()"
            placeholder="Napisz coś"
            maxlength="250"
        />
        <button
            @click="sendMessage()"
            class="col-span-1 bg-gray-500 hover:bg-blue-700 p-2 rounded text-white"
        >
            Wyślij 
        </button>
    </div>
</template>

<script charset="UTF-8">
import Input from "../../Jetstream/Input.vue";

export default {
    components: { Input },
    props: ["room","message"],
    data() {
        return {
            message: "",
        };
    },
    methods: {
            sendMessage() {

                this.checkMessage();


            if (this.message == "") {
                return;
            } 
            axios
                .post(`/chat/room/${this.room.id}/message`, {
                    message: this.message,
                })

                .then((res) => {
                    if (res.status == 201) {
                        this.message = "";
                        this.$emit("messagesent");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
                
            
        },

                checkMessage(){
                        let blacklisted = require('./wulgaryzmy.json');
                            //2 looking for words
                            let foundInText = false;
                            let znaleziono = [];
                            let gwiazdki = "";
                            for (var i in blacklisted) { // loops through the blacklisted list
                            if (this.message.toLowerCase().includes(blacklisted[i].toLowerCase())){
                                znaleziono.push(blacklisted[i]);
                                foundInText = true;
                                }
                            }
                            // checks casesensitive words
                        
                            //3 deletes and send message
                            if (foundInText) {
                                for(var i=0; i < znaleziono.length; i++) {
                                    let gw=znaleziono[i];

                                    for(var j=0; j< gw.length; j++)
                                    {
                                        gwiazdki += "*"; 
                                    }
                                     this.message = this.message.toLowerCase().replaceAll(gw, gwiazdki);
                                     gwiazdki="";
                                }
                            }
                },

    },
};
</script>

<style></style>
