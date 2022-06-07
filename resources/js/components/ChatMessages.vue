<template>
<div>
<div class="media media-comment w-100 chat" v-for="message of messages" :key="message.id">
    <span  class="text-uppercase bg-primary media-comment-avatar avatar avatar-lg rounded-circle">
        HJ
    </span>
<div class="media-body">


    <div class="media-comment-text">
        <h6 class="h5 mt-0">{{message.user.name}}
            <span class="ml-3">
                <i class="fa fa-history"></i>
                <span class="text-muted text-small">
                    {{message.created_at  | formatDate}}
                </span>
            </span>
           <div v-bind:class="'dropdown' + message.id +' no-arrow ml-auto float-right'">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" v-bind:data-toggle="'dropdown'+message.id"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Options:</div>
                    <a class="dropdown-item" href="" data-toggle="dropdown">Edit</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#del1">Delete</a>
                </div>
            </div>
        </h6>
        <p class="text-sm lh-160">{{message.message}}</p>
    </div>
</div>
</div>
</div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>