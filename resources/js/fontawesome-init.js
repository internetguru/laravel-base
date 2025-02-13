import { library, dom, config } from "@fortawesome/fontawesome-svg-core";

import { faS, faCog, faTimes, faCheck, faUser, faUserGear, faChevronLeft, faChevronRight, faFlask, faEdit, faUpload, faUndo, faPlus, faTrash, faArrowRightFromBracket, faCogs, faNetworkWired, faDoorOpen, faUsers, faUserCog, faProjectDiagram, faServer, faSave, faCalendarAlt } from '@fortawesome/free-solid-svg-icons'
import { faFacebook, faInstagram, faGoogle } from '@fortawesome/free-brands-svg-icons'

library.add(faFacebook, faInstagram, faGoogle, faS, faCog, faTimes, faCheck, faUser, faUserGear, faChevronLeft, faChevronRight, faFlask, faEdit, faUpload, faUndo, faPlus, faTrash, faArrowRightFromBracket, faCogs, faNetworkWired, faDoorOpen, faUsers, faUserCog, faProjectDiagram, faServer, faSave, faCalendarAlt);

dom.i2svg()
dom.watch()
