<template>
  <div class="media-body">
    <div class="form-group">
      <textarea
        name="message"
        class="form-control"
        placeholder="Write your message"
        v-model="newMessage"
        @keyup.enter="sendMessage" rows="1"></textarea>
    </div>

    <div class="form-group">
      <button
        class="btn btn-primary float-right"
        id="btn-chat"
        @click="sendMessage"
      >
        Send
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["user"],

  data() {
    return {
      newMessage: "",
    };
  },

  methods: {
    sendMessage() {
      this.$emit("messagesent", {
        user: this.user,
        message: this.newMessage,
      });

      this.newMessage = "";
    }
  }
}
</script>