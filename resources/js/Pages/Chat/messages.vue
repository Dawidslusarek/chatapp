<template>
  <div class="h96 w-full">
    <div
      class="h-full p-2 flex flex-col-reverse overflow-scroll messageContainer"
    >
      <div v-for="(message, index) in messages" :key="index">
        <message-item :message="message" :userId="userId" />
      </div>
    </div>
  </div>
</template>

<script>
import messageItem from "./messageItem.vue";

export default {
  props: ["messages", "userId"],
  components: { messageItem },
};
</script>

<style>
.messageContainer {
  height: 500px;
  overflow-y: scroll;
}
</style>
