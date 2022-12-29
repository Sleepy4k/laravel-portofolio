// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";

export default function ShowForm({ contact }) {
    return (
        <Form>
            <Form.Group className="mb-3" controlId="group">
                <Form.Label>{transData("form.contact.name")}</Form.Label>
                <Form.Control
                    type="text"
                    name="group"
                    defaultValue={contact.name}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3" controlId="key">
                <Form.Label>{transData("form.contact.email")}</Form.Label>
                <Form.Control
                    type="text"
                    name="key"
                    defaultValue={contact.email}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3" controlId="id">
                <Form.Label>{transData("form.contact.message")}</Form.Label>
                <Form.Control
                    as="textarea"
                    rows={3}
                    name="id"
                    defaultValue={contact.message}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Link
                href={route("contact.index")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.contact.back")}
            </Link>
        </Form>
    );
}
