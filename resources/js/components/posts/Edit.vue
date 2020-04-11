<template>
  <div>
    <div class="container">
      <b-form @submit="onSubmit">
        <div class="row">
          <div class="col-8">
            <b-form-group
              label="Title Postingan"
              description="Masukkan judul page yang benar"
            >
              <b-form-input
                v-model="form.title"
                class="border border-info shadow-lg bg-white rounded"
                placeholder="Judul halaman"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              label="Isi Konten"

            >
              <el-tiptap
                v-model="content"
                :extensions="extensions"
              />
            </b-form-group>

          </div>
          <div class="col-4">
            <b-form-group>
              <b-button
                type="submit"
                variant="primary"
                block
              >SIMPAN</b-button>
            </b-form-group>

            <b-card
              header="Default"
              class="text-center"
            >
              <b-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b-card-text>
            </b-card>

          </div>
        </div>

      </b-form>
    </div>

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
  Image,
  Preview,
  TextAlign,
  TextColor,
  Iframe,
  Table,
  TableHeader,
  TableCell,
  TableRow,
} from 'element-tiptap';

export default {

  data () {
    return {
      form: {
        title: '',
        slug: '',
        body: '',

      },
      // they will be added to menubar and bubble menu by the order you declare.
      extensions: [
        new Doc(),
        new Text(),
        new Paragraph(),
        new Heading({ level: 5, bubble: true }),
        new Bold({ bubble: true }), // render command-button in bubble menu.
        new Underline({ bubble: true }),
        new Italic({ bubble: true }),
        new Strike({ bubble: true }),
        new ListItem(),
        new BulletList(),
        new OrderedList(),
        new Image(),
        new Preview(),
        new TextAlign({ bubble: true }),
        new TextColor({ bubble: true }),
        new Iframe(),
        new Table(),
        new TableHeader(),
        new TableCell(),
        new TableRow()
      ],
      // editor's content
      content: `
      <h1>Heading</h1>
      <p>This Editor is awesome!</p>`,
    }
  },
  methods: {
    onSubmit (e) {
      alert('simpan')
      e.preventDefault()

    }
  },
}
</script>
