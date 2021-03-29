<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <messages></messages>
          <input-message :room="currentRoom" />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import messages from "./messages";
import InputMessage from "./inputMessage.vue";
export default {
  components: {
    AppLayout,
    messages,
    InputMessage,
  },
  data() {
    return {
      Rooms: [],
      currentRoom: [],
      messages: [],
    };
  },
  methods: {
    getRooms() {
      axios
        .get("chat/rooms")
        .then((res) => {
          this.Rooms = res.data;
          this.setRoom(res.data[0]);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    setRoom(room) {
      this.currentRoom = room;
      this.getMessages;
    },
    getMessages() {
      axios
        .get(`chat/room/${this.currentRoom.id}/messages`)
        .then((res) => {
          this.messages = res.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    this.getRooms();
  },
};
</script>

    InputMessage
