// Import Core Libraries
import { useState } from "react";

// Import Bootstrap Components
import Tab from "react-bootstrap/Tab";
import Tabs from "react-bootstrap/Tabs";

// Import Partials
import Env from "./Env";
import App from "./App";

export default function Navbar({ env, app }) {
    const [active, setActive] = useState("env");

    return (
        <Tabs
            id="controlled-tab"
            activeKey={active}
            onSelect={(k) => setActive(k)}
            className="mb-3"
        >
            <Tab eventKey="env" title={transData("page.setting.env")}>
                <Env data={env} />
            </Tab>
            <Tab eventKey="app" title={transData("page.setting.app")}>
                <App data={app} />
            </Tab>
        </Tabs>
    );
}
