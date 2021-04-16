<template>
  <div>
    <span
      class="messages rounded-lg"
      :class="
        userId != message.user_id
          ? ['float-left', 'different']
          : ['float-right', 'mymessage']
      "
    >
      <span class="font-semibold antialiased">{{ message.user.name }} </span>:
      <span class="font-thin antialiased">{{ message.message }}</span>
    </span>
  </div>
</template>

<script>
export default {
  props: ["message", "userId"],
};
</script>

<style>
.messages {
  padding: 5px 10px;
  margin: 5px 0px;
  width: auto;
  color: white;
}
.mymessage {
  background: #3a2fce;
}
.different {
  background: #838383;
}
</style>
