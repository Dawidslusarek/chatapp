<template>
    <div class="relative h-10 m-1"></div>
    <div style="border-top: 1px solid black" class="grid grid-cols-6">
        <input
            type="text"
            class="col-span-5 p-2 outline-none border-none"
            v-model="message"
            @keyup.enter="sendMessage()"
            placeholder="write someting"
        />
        <button
            @click="sendMessage()"
            class="col-span-1 bg-gray-500 hover:bg-blue-700 p-2 rounded text-white"
        >
            Send Message
        </button>
    </div>
</template>

<script>
import Input from "../../Jetstream/Input.vue";

export default {
    components: { Input },
    props: ["room"],
    data() {
        return {
            message: "",
        };
    },
    methods: {
        sendMessage() {
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
    },
};
</script>

<style></style>
