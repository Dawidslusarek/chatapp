<template charset="UTF-8">
    <div style="border-top: 1px solid black" class="grid grid-cols-12">
        <div class="maxlength" ><div class="input-group-addon" v-text="(max - message.length)"></div>/300</div>
        <input
            type="text"
            class="col-span-9 p-2 outline-none border-none"
            v-model="message"
            @keyup.enter="sendMessage()"
            placeholder="Napisz coś"
            :maxlength="max"
        />
        <button
            @click="sendMessage()"
            class="col-span-2 bg-gray-500 hover:bg-blue-700 p-2 rounded text-white"
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
            max: 300,
        };
    },
    methods: {
            sendMessage() {

                this.checkLength();


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
                    this.checkLength();

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

                checkLength() {
                let mes = this.message;
                if(mes.length>300) {
                    this.message = mes.substring(0, 300);
                }
                },

    },
};
</script>

<style>
.maxlength{
display:flex;
align-items:center;
justify-content:center;
background-color:#ecf0f1;
}
</style>
