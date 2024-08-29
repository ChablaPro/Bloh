<template>
  <div>
    <header
      class="dHctaC0yNA dHctYm9yZGVyLWI dHctYm9yZGVyLXNsYXRlLTIwMC84MA dHctYmctd2hpdGU fixed w-full z-50"
    >
      <div
        class="dHctbXgtYXV0bw dHctbWF4LXctc2NyZWVuLXhs dHctcHgtNQ sm:dHctcHgtNg lg:dHctcHgtOA dHctZmxleA dHctaC1mdWxs dHctdy1mdWxs dHctaXRlbXMtY2VudGVy"
      >
        <nav
          class="dHctcmVsYXRpdmU dHctei01MA dHctZmxleA dHctdy1mdWxs dHctaXRlbXMtY2VudGVy dHctanVzdGlmeS1iZXR3ZWVu"
        >
          <div class="dHctZmxleA dHctc2hyaW5rLTA dHctaXRlbXMtY2VudGVy">
            <router-link
              aria-label="Home"
              class="dHctZmxleA dHctZmxleC1zaHJpbmstMA dHctaXRlbXMtY2VudGVy"
              to="/"
              ><img
                alt=""
                loading="lazy"
                width="122"
                height="48"
                decoding="async"
                data-nimg="1"
                class="dHctaC04 dHctdy1hdXRv sm:dHctaC05 md:dHctaGlkZGVu lg:dHctYmxvY2s lg:dHctaC0xMA"
                style="color: transparent"
                srcset="bloh/logo-1.png 1x?url=%2Fbloh%2Fstatic%2Fmedia%2Flogo.d2e4816a.png&amp;w=128&amp;q=75 1x, bloh/logo.png 2xe?url=%2Fbloh%2Fstatic%2Fmedia%2Flogo.d2e4816a.png&amp;w=256&amp;q=75 2x"
                src="bloh/logo.png?url=%2Fbloh%2Fstatic%2Fmedia%2Flogo.d2e4816a.png&amp;w=256&amp;q=75" /><img
                alt=""
                loading="lazy"
                width="65"
                height="73"
                decoding="async"
                data-nimg="1"
                class="dHctaGlkZGVu dHctaC04 dHctdy1hdXRv md:dHctYmxvY2s lg:dHctaGlkZGVu"
                style="color: transparent"
                srcset="bloh/logo-icon-1.png 1x?url=%2Fbloh%2Fstatic%2Fmedia%2Flogo-icon.0c534754.png&amp;w=96&amp;q=75 1x, bloh/logo-icon.png 2xe?url=%2Fbloh%2Fstatic%2Fmedia%2Flogo-icon.0c534754.png&amp;w=256&amp;q=75 2x"
                src="bloh/logo-icon.png?url=%2Fbloh%2Fstatic%2Fmedia%2Flogo-icon.0c534754.png&amp;w=256&amp;q=75"
            /></router-link>
          </div>
          <div
            class="dHctaGlkZGVu dHctaXRlbXMtY2VudGVy md:dHctZmxleA md:dHctc3BhY2UteC02 lg:dHctc3BhY2UteC04"
          >
            <router-link
              :class="
                $route.path == '/'
                  ? 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA after:tw-opacity-100'
                  : 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA hover:dHctdGV4dC1zbGF0ZS05MDA hover:after:tw-opacity-25'
              "
              to="/"
              >Accueil</router-link
            ><router-link
              :class="
                $route.path == '/about'
                  ? 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA after:tw-opacity-100'
                  : 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA hover:dHctdGV4dC1zbGF0ZS05MDA hover:after:tw-opacity-25'
              "
              to="/about"
              >À Propos</router-link
            ><router-link
              :class="
                $route.path == '/work'
                  ? 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA after:tw-opacity-100'
                  : 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA hover:dHctdGV4dC1zbGF0ZS05MDA hover:after:tw-opacity-25'
              "
              to="/work"
              >Réalisations</router-link
            ><router-link
              :class="
                $route.path == '/blog'
                  ? 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA after:tw-opacity-100'
                  : 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA hover:dHctdGV4dC1zbGF0ZS05MDA hover:after:tw-opacity-25'
              "
              to="/blog"
              >Blog</router-link
            ><router-link
              :class="
                $route.path == '/contact'
                  ? 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA after:tw-opacity-100'
                  : 'dHctcmVsYXRpdmU dHctZHVyYXRpb24tMjAw after:tw-absolute after:-tw-bottom-2.5 after:tw-left-1/2 after:tw-h-0.5 after:tw-w-4 after:-tw-translate-x-1/2 after:tw-rounded-full after:tw-bg-slate-900 after:tw-opacity-0 after:tw-content-[&quot;&quot;] dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS05MDA hover:dHctdGV4dC1zbGF0ZS05MDA hover:after:tw-opacity-25'
              "
              to="/contact"
              >Contact</router-link
            >
            <!--div class="dHctcmVsYXRpdmU" data-headlessui-state="">
              <button
                class="dHctZ3JvdXA dHctZmxleA dHctaXRlbXMtY2VudGVy dHctZm9udC1tZWRpdW0 dHctb3V0bGluZS1ub25l dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ focus:dHctb3V0bGluZS1ub25l dHctdGV4dC1zbGF0ZS03MDA hover:dHctdGV4dC1zbGF0ZS05MDA"
                id="headlessui-menu-button-:Rqda:"
                type="button"
                aria-haspopup="menu"
                aria-expanded="false"
                data-headlessui-state=""
              >
                <span>Pages</span
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewbox="0 0 20 20"
                  fill="currentColor"
                  class="dHctbWwtMg dHctaC01 dHctdy01 dHctZHVyYXRpb24tMzAw dHctdGV4dC1zbGF0ZS02MDA group-hover:dHctdGV4dC1zbGF0ZS04MDA"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
            </div-->
          </div>
          <div class="dHctZmxleA dHctaXRlbXMtY2VudGVy">
            <a
              class="dHctaW5saW5lLWZsZXg dHctaXRlbXMtY2VudGVy dHctcm91bmRlZC1mdWxs dHctZ2FwLTI.5 dHctanVzdGlmeS1jZW50ZXI dHctcHgtNw dHctcHktMw dHctdGV4dC1tZA dHctZm9udC1zZW1pYm9sZA dHctbGVhZGluZy1ub25l dHctb3V0bGluZS1vZmZzZXQtMg dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ active:dHctdHJhbnNpdGlvbi1ub25l dHctdGV4dC1zbGF0ZS05MDA dHctc2hhZG93LXNt dHctc2hhZG93LXNreS0xMDAvNTA dHctcmluZy0x dHctcmluZy1zbGF0ZS0xMDA hover:dHctYmctc2xhdGUtMjAwLzYw hover:dHctc2hhZG93LXNreS0xMDAvNTA dHctYmctc2xhdGUtMTAwLzgw"
              href="tel:+22996031886"
              >Passer un appel</a
            >
            <div class="dHctbWwtNA md:dHctaGlkZGVu">
              <div data-headlessui-state="">
                <button
                  class="dHctZ3JvdXA dHctcmVsYXRpdmU dHctei01MA dHctZmxleA dHctY3Vyc29yLXBvaW50ZXI dHctaXRlbXMtY2VudGVy dHctanVzdGlmeS1jZW50ZXI dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtMTAwLzgw dHctcC0z dHctc2hhZG93LXNt dHctc2hhZG93LXNreS0xMDAvNTA dHctcmluZy0x dHctcmluZy1zbGF0ZS05MDAvNQ dHctdHJhbnNpdGlvbg dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ hover:dHctYmctc2xhdGUtMjAwLzYw focus:dHctb3V0bGluZS1ub25l md:dHctaGlkZGVu"
                  aria-label="Toggle Navigation"
                  type="button"
                  aria-expanded="false"
                  data-headlessui-state=""
                  @click="changeMenu"
                >
                  <span
                    class="dHctcmVsYXRpdmU dHctaC0z.5 dHctdy00"
                    v-if="!defaultMenu"
                  >
                    <span
                      class="dHctYWJzb2x1dGU dHctYmxvY2s dHctaC0w.5 dHctcm90YXRlLTA dHctdHJhbnNmb3Jt dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtNzAw dHctb3BhY2l0eS0xMDA dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ group-hover:dHctYmctc2xhdGUtOTAw dHctbGVmdC0w dHctdG9wLTA dHctdy1mdWxs"
                    ></span
                    ><span
                      class="dHctYWJzb2x1dGU dHctbGVmdC0w dHctdG9wLTE.5 dHctYmxvY2s dHctaC0w.5 dHctdy1mdWxs dHctdHJhbnNmb3Jt dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtNzAw dHctb3BhY2l0eS0xMDA dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ group-hover:dHctYmctc2xhdGUtOTAw dHctcm90YXRlLTA"
                    ></span
                    ><span
                      class="dHctYWJzb2x1dGU dHctbGVmdC0w dHctdG9wLTE.5 dHctYmxvY2s dHctaC0w.5 dHctdy1mdWxs dHctdHJhbnNmb3Jt dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtNzAw dHctb3BhY2l0eS0xMDA dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ group-hover:dHctYmctc2xhdGUtOTAw dHctcm90YXRlLTA"
                    ></span
                    ><span
                      class="dHctYWJzb2x1dGU dHctYmxvY2s dHctaC0w.5 dHctcm90YXRlLTA dHctdHJhbnNmb3Jt dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtNzAw dHctb3BhY2l0eS0xMDA dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ group-hover:dHctYmctc2xhdGUtOTAw dHctbGVmdC0w dHctdG9wLTM dHctdy1mdWxs"
                    ></span
                  ></span>

                  <span
                    class="dHctcmVsYXRpdmU dHctaC0z.5 dHctdy00"
                    v-if="defaultMenu"
                  >
                    <span
                      class="dHctYWJzb2x1dGU dHctYmxvY2s dHctaC0w.5 dHctcm90YXRlLTA dHctdHJhbnNmb3Jt dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtNzAw dHctb3BhY2l0eS0xMDA dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ group-hover:dHctYmctc2xhdGUtOTAw dHctbGVmdC0x/2 dHctdG9wLTE.5 dHctdy0w"
                    ></span>
                    <span
                      class="dHctYWJzb2x1dGU dHctbGVmdC0w dHctdG9wLTE.5 dHctYmxvY2s dHctaC0w.5 dHctdy1mdWxs dHctdHJhbnNmb3Jt dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtNzAw dHctb3BhY2l0eS0xMDA dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ group-hover:dHctYmctc2xhdGUtOTAw dHctcm90YXRlLTQ1"
                    ></span>
                    <span
                      class="dHctYWJzb2x1dGU dHctbGVmdC0w dHctdG9wLTE.5 dHctYmxvY2s dHctaC0w.5 dHctdy1mdWxs dHctdHJhbnNmb3Jt dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtNzAw dHctb3BhY2l0eS0xMDA dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ group-hover:dHctYmctc2xhdGUtOTAw LXR3LXJvdGF0ZS00NQ"
                    ></span>
                    <span
                      class="dHctYWJzb2x1dGU dHctYmxvY2s dHctaC0w.5 dHctcm90YXRlLTA dHctdHJhbnNmb3Jt dHctcm91bmRlZC1mdWxs dHctYmctc2xhdGUtNzAw dHctb3BhY2l0eS0xMDA dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMzAw dHctZWFzZS1pbi1vdXQ group-hover:dHctYmctc2xhdGUtOTAw dHctbGVmdC0x/2 dHctdG9wLTE.5 dHctdy0w"
                    ></span>
                  </span>
                </button>

                <!--Menu sur le mobile-->
                <div v-if="defaultMenu">
                  <div
                    class="dHctZml4ZWQ dHctaW5zZXQtMA dHctei0yMA dHctYmctc2xhdGUtOTAw dHctYmctb3BhY2l0eS01MA dHctb3BhY2l0eS0xMDA"
                    id="headlessui-popover-overlay-:ro:"
                    aria-hidden="true"
                    data-headlessui-state="open"
                    @click="defaultMenu = false"
                  ></div>

                  <div
                    class="dHctYWJzb2x1dGU dHctaW5zZXQteC0w dHctdG9wLWZ1bGw dHctei0zMA dHctbXQtNA dHctb3JpZ2luLXRvcA dHctb3ZlcmZsb3ctaGlkZGVu dHctcm91bmRlZC0yeGw dHctYmctc2xhdGUtNTA dHctcHgtNg dHctcHktNw dHctc2hhZG93LXhs dHctc2hhZG93LXNreS0xMDAvNDA dHctcmluZy0x dHctcmluZy1zbGF0ZS05MDAvNQ dHctb3BhY2l0eS0xMDA dHctc2NhbGUtMTAw"
                    id="headlessui-popover-panel-:rp:"
                    tabindex="-1"
                    data-headlessui-state="open"
                  >
                    <div>
                      <div class="dHctZmxleA dHctZmxleC1jb2w dHctc3BhY2UteS00">
                        <router-link
                          class="dHctYmxvY2s dHctdGV4dC1iYXNl dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS03MDA dHctZHVyYXRpb24tMjAw hover:dHctdGV4dC1zbGF0ZS05MDA"
                          to="/"
                          @click="defaultMenu = false"
                          :style="
                            $route.path == '/'
                              ? { color: 'black', fontWeight: 900 }
                              : {}
                          "
                        >
                          Accueil
                        </router-link>
                        <router-link
                          class="dHctYmxvY2s dHctdGV4dC1iYXNl dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS03MDA dHctZHVyYXRpb24tMjAw hover:dHctdGV4dC1zbGF0ZS05MDA"
                          to="/about"
                          @click="defaultMenu = false"
                          :style="
                            $route.path == '/about'
                              ? { color: 'black', fontWeight: 900 }
                              : {}
                          "
                        >
                          À Propos
                        </router-link>
                        <router-link
                          class="dHctYmxvY2s dHctdGV4dC1iYXNl dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS03MDA dHctZHVyYXRpb24tMjAw hover:dHctdGV4dC1zbGF0ZS05MDA"
                          to="/work"
                          @click="defaultMenu = false"
                          :style="
                            $route.path == '/work'
                              ? { color: 'black', fontWeight: 900 }
                              : {}
                          "
                        >
                          Réalisations
                        </router-link>
                        <router-link
                          class="dHctYmxvY2s dHctdGV4dC1iYXNl dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS03MDA dHctZHVyYXRpb24tMjAw hover:dHctdGV4dC1zbGF0ZS05MDA"
                          to="/blog"
                          @click="defaultMenu = false"
                          :style="
                            $route.path == '/blog'
                              ? { color: 'black', fontWeight: 900 }
                              : {}
                          "
                        >
                          Blog
                        </router-link>
                        <router-link
                          class="dHctYmxvY2s dHctdGV4dC1iYXNl dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1zbGF0ZS03MDA dHctZHVyYXRpb24tMjAw hover:dHctdGV4dC1zbGF0ZS05MDA"
                          to="/contact"
                          @click="defaultMenu = false"
                          :style="
                            $route.path == '/contact'
                              ? { color: 'black', fontWeight: 900 }
                              : {}
                          "
                        >
                          Contacts
                        </router-link>

                        <!--div class="dHctcmVsYXRpdmU" data-headlessui-state="">
                          <button
                            class="dHctZ3JvdXA dHctZmxleA dHctdy1mdWxs dHctaXRlbXMtY2VudGVy dHctZ2FwLTI dHctdGV4dC1iYXNl dHctZm9udC1zZW1pYm9sZA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ dHctdGV4dC1zbGF0ZS03MDA hover:dHctdGV4dC1zbGF0ZS05MDA"
                            id="headlessui-disclosure-button-:rs:"
                            type="button"
                            aria-expanded="false"
                            data-headlessui-state="">
                            <span>Pages</span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                              class="dHctaC01 dHctdy01 dHctZHVyYXRpb24tMzAw dHctdGV4dC1zbGF0ZS03MDA group-hover:dHctdGV4dC1zbGF0ZS05MDA"
                              aria-hidden="true">
                              <path
                                fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd">
                              </path>
                            </svg>
                          </button>
                        </div-->
                      </div>
                    </div>
                  </div>
                </div>
                <!--Menu sur le mobile-->
              </div>
              <div
                style="
                  position: fixed;
                  top: 1px;
                  left: 1px;
                  width: 1px;
                  height: 0;
                  padding: 0;
                  margin: -1px;
                  overflow: hidden;
                  clip: rect(0, 0, 0, 0);
                  white-space: nowrap;
                  border-width: 0;
                  display: none;
                "
              ></div>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
</template>

<script>
export default {
  data() {
    return {
      defaultMenu: false,
    };
  },
  methods: {
    changeMenu() {
      this.defaultMenu = !this.defaultMenu;
    },
  },
};
</script>