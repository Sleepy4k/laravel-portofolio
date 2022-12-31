// Import Core Libraries
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";

export default function ShowForm({ contact }) {
    return (
        <Form>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="name">
                    {transData("form.contact.name")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="name"
                    defaultValue={contact.name}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="email">
                    {transData("form.contact.email")}
                </Form.Label>
                <Form.Control
                    type="text"
                    name="email"
                    defaultValue={contact.email}
                    readOnly
                    disabled
                />
            </Form.Group>
            <Form.Group className="mb-3">
                <Form.Label htmlFor="message">
                    {transData("form.contact.message")}
                </Form.Label>
                <Form.Control
                    as="textarea"
                    rows={3}
                    name="message"
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
