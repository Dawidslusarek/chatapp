<template>
  <div class="relative h-10 m-1"></div>
  <div style="border-top: 1px solid black" class="grid grid-cols-6">
    <input
      type="text"
      v-model="message"
      @keyup.enter="sendMessage()"
      placeholder="write someting"
      class="col-span-5 outline-none p-1"
    />
    <button
      @click="sendMessage()"
      class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 mt-1 rounded text-white"
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
            this.$emit("messageSent");
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<style>
</style>
