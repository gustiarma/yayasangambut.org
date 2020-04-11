<template>
  <div>
      haha

    <el-tiptap
      v-model="content"
      :extensions="extensions"
    />
  </div>
</template>

<script>
import {
  // necessary extensions
  Doc,
  Text,
  Paragraph,
  Heading,
  Bold,
  Underline,
  Italic,
  Strike,
  ListItem,
  BulletList,
  OrderedList,
} from 'element-tiptap';

export default {

  data () {
    return {
      // they will be added to menubar and bubble menu by the order you declare.
      extensions: [
        new Doc(),
        new Text(),
        new Paragraph(),
        new Heading({ level: 5 }),
        new Bold({ bubble: true }), // render command-button in bubble menu.
        new Underline(),
        new Italic(),
        new Strike(),
        new ListItem(),
        new BulletList(),
        new OrderedList(),
      ],
      // editor's content
      content: `
      <h1>Heading</h1>
      <p>This Editor is awesome!</p>`,
    }
  },
}
</script>
