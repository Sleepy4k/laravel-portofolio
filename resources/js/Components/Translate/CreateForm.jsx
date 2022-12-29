// Import Core Libraries
import { useState } from "react";
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-react";

// Import Bootstrap Components
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";

export default function CreateForm() {
    const [values, setValues] = useState({
        group: "",
        key: "",
        id: "",
        en: "",
    });

    const handleChanges = (e) => {
        setValues({
            ...values,
            [e.target.name]: e.target.value,
        });
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        Inertia.post("/translate", values);
    };

    return (
        <Form>
            <Form.Group className="mb-3" controlId="group">
                <Form.Label>{transData("form.translate.group")}</Form.Label>
                <Form.Control
                    type="text"
                    name="group"
                    placeholder={transData("form.translate.placeholder.group")}
                    onChange={handleChanges}
                />
            </Form.Group>
            <Form.Group className="mb-3" controlId="key">
                <Form.Label>{transData("form.translate.key")}</Form.Label>
                <Form.Control
                    type="text"
                    name="key"
                    placeholder={transData("form.translate.placeholder.key")}
                    onChange={handleChanges}
                />
            </Form.Group>
            <Form.Group className="mb-3" controlId="id">
                <Form.Label>{transData("form.translate.id")}</Form.Label>
                <Form.Control
                    type="text"
                    name="id"
                    placeholder={transData("form.translate.placeholder.id")}
                    onChange={handleChanges}
                />
            </Form.Group>
            <Form.Group className="mb-3" controlId="en">
                <Form.Label>{transData("form.translate.en")}</Form.Label>
                <Form.Control
                    type="text"
                    name="en"
                    placeholder={transData("form.translate.placeholder.en")}
                    onChange={handleChanges}
                />
            </Form.Group>
            <Link
                href={route("translate.index")}
                as="button"
                className="btn btn-success me-2"
            >
                {transData("form.translate.back")}
            </Link>
            <Button variant="primary" type="submit" onClick={handleSubmit}>
                {transData("form.translate.submit")}
            </Button>
        </Form>
    );
}
